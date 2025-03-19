require 'mysql2'
require 'singleton'

class Conexion
  include Singleton

  def initialize
    @conexion = Mysql2::Client.new(
      host: 'localhost',
      username: 'myuser',
      password: 'mypassword',
      database: 'example_db',
      port: 3306,
      connect_timeout: 121
    )
  end

  def selectAll(tabla)
    sql = "SELECT * FROM #{tabla}"
    result = @conexion.query(sql, symbolize_keys: true)
    result.to_a
  end

  def selectWhere(tabla, fila, operador, valor, tipo_valor, una_fila)
    valor = tipo_valor == :char ? "'#{valor}'" : valor
    sql = "SELECT * FROM #{tabla} WHERE #{fila} #{operador} #{valor}"
    result = @conexion.query(sql, symbolize_keys: true)

    una_fila == :una_fila ? result.first : result.to_a
  end

  def cargarFixtures(bd = 'prueba')
    case bd
    when 'prueba'
      cargarFixturesPrueba
    end
  end

  def usar_bd_prueba
    puts "Conectando a example_db"
    @conexion.query("USE example_db")
  end

  def cargarFixturesPrueba
    puts "Conectando a bd_prueba"
    @conexion.query("USE example_db")
    puts "clean_tables.sql"
    ejecutar(IO.read("fixture-files/clean_tables.sql"))
  end

  def ejecutar(instruccion_sql)
    @conexion.query(instruccion_sql)
  end

  def cerrarConexion
    @conexion.close
  end
end
