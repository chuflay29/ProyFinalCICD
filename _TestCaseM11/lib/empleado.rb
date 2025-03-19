    class Empleado
        attr_accessor :nombre, :apellido, :ci, :cargo, :fecha_ingreso, :salario
      def initialize(nombre, apellido, ci, cargo, fecha_ingreso, salario)
        @nombre = nombre
        @apellido = apellido
        @ci = ci
        @cargo = cargo
        @fecha_ingreso = fecha_ingreso
        @salario = salario
      end

        def Empleado.nuevoEmpleado
            oEmpleado = Empleado.new('Benito', 'Camela Rico', '12345678', 'GERENTE', '10/09/1950', '10000')
            oEmpleado
        end

    end
