    class Cliente
        attr_accessor :nombre, :apellido_materno, :apellido_paterno, :celular, :email, :ci
      def initialize(nombre, apellido_paterno, apellido_materno, celular, email, ci)
        @nombre = nombre
        @apellido_materno = apellido_materno
        @apellido_paterno = apellido_paterno
        @celular = celular
        @email = email
        @ci = ci
      end

        def Cliente.nuevoCliente
            oCliente = Cliente.new('Benito', 'Camela', 'Rico', '12345678', 'benito@prueba.com', '15324687')
            oCliente
        end

    end
