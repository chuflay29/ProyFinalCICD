    class Producto
        attr_accessor :nombre, :descripcion, :precio
      def initialize(nombre, descripcion, precio)
        @nombre = nombre
        @descripcion = descripcion
        @precio = precio
      end

        def Producto.nuevoProducto
            pProducto = Producto.new('PIEZA 1', 'PIEZAS PRUEBAS', '5')
            pProducto
        end

    end
