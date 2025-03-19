class PmEmpleado < Eirik::Page
  include RSpec::Matchers 

  URL = "#{$root_url}/empleados"
  def initialize(page_manager)
    super(page_manager)
    add_element("span_clientes", "element", "text", "- Clientes", self, "always", false)
    add_element("btn_nuevo", "element", "text", "Crear Cliente", self, "always", false)
    add_element("txt_nombre", "text_field", "id", "Nombre", self, "always", false)
    add_element("txt_apellido", "text_field", "id", "Apellido", self, "always", false)
    add_element("txt_ci", "text_field", "id", "DocumentoIdentidad", self, "always", false)
    add_element("txt_cargo", "text_field", "id", "Cargo", self, "always", false)
    add_element("txt_fecha_ingreso", "text_field", "id", "FechaIngreso", self, "always", false)
    add_element("txt_salario", "text_field", "id", "Salario", self, "always", false)
    add_element("btn_crear", "button", "text", "Enviar", self, "always", false)

  end

  def registrarEmpleado(oEmpleado)
    @browser.wait_until{@browser.table(:class => "table table-responsive-md").present?}
    @browser.element(:href => "http://localhost:3500/empleados/creacion").click
    # btn_nuevo.click
    llenarDatos(oEmpleado)
    btn_crear.click
  end

  def comprobarRegistro(oEmpleado)
    @browser.wait_until{@browser.table(:class => "table table-responsive-md").td(:text => oEmpleado.nombre).exists?}
    fila_producto = @browser.table(:class => "table table-responsive-md").tbody.td(:text => oEmpleado.nombre).parent
    expect(fila_producto.td(:index => 1).text).to eq(oEmpleado.nombre)
    expect(fila_producto.td(:index => 5).text).to eq(oEmpleado.ci)
    expect(fila_producto.td(:index => 4).text).to eq(oEmpleado.email)
  end

  private
  def llenarDatos(oEmpleado)
    txt_nombre.set oEmpleado.nombre
    txt_apellido.set oEmpleado.apellido
    txt_ci.set oEmpleado.ci
    txt_cargo.set oEmpleado.cargo 
    txt_fecha_ingreso.set oEmpleado.fecha_ingreso
    txt_salario.set oEmpleado.salario
  end

end