
class PmProductos < Eirik::Page
  include RSpec::Matchers 

  URL = "#{$root_url}/productos"
  def initialize(page_manager, pElementsSelectors = nil)
    super(page_manager)
    add_element("btn_nuevo", "button", "class", "mdc-button mdc-button--raised mat-mdc-raised-button mat-unthemed mat-mdc-button-base", self, "always", false)
    add_element("txt_nombre", "text_field", "id", "nombre", self, "always", false)
    add_element("txt_descripcion", "text_field", "id", "descripcion", self, "always", false)
    add_element("txt_precio", "text_field", "id", "precio", self, "always", false)
    add_element("btn_crear", "button", "text", "Enviar", self, "always", false)

  end

  def registrarProducto(oProducto)
    @browser.element(:href => "http://localhost:3500/productos/creacion").click
    # btn_nuevo.click
    llenarDatos(oProducto)
    btn_crear.click
  end

  def comprobarRegistro(oProducto)
    @browser.wait_until{@browser.table(:class => "mat-mdc-table mdc-data-table__table cdk-table mat-elevation-z8").td(:text => oProducto.nombre).exists?}
    fila_producto = @browser.table(:class => "mat-mdc-table mdc-data-table__table cdk-table mat-elevation-z8").td(:text => oProducto.nombre).parent
    expect(fila_producto.td(:index => 1).text).to eq(oProducto.sku)
    expect(fila_producto.td(:index => 2).text).to eq(oProducto.nombre)
    expect(fila_producto.td(:index => 3).text).to eq(oProducto.nombre_extranjero)
    expect(fila_producto.td(:index => 4).text).to eq(oProducto.peso)
    expect(fila_producto.td(:index => 5).text).to eq(oProducto.um)
    expect(fila_producto.td(:index => 6).text).to eq(oProducto.precio_base)
    expect(fila_producto.td(:index => 7).text).to eq(oProducto.precio_base)
    expect(fila_producto.td(:index => 8).text).to eq(oProducto.cod_barra)
    expect(fila_producto.td(:index => 9).text).to eq(oProducto.sku_fabricante)
    expect(fila_producto.td(:index => 10).text).to eq(oProducto.sku_alternate)
    expect(fila_producto.td(:index => 11).text).to eq(oProducto.grupo_producto)
    expect(fila_producto.td(:index => 12).text).to eq(oProducto.fabricante)

  end

  private
  def llenarDatos(oProducto)
    txt_nombre.set oProducto.nombre
    txt_descripcion.set oProducto.descripcion
    txt_precio.set oProducto.precio
  end

end