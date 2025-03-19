class PmCliente < Eirik::Page
  include RSpec::Matchers 

  URL = "#{$root_url}/clientes"
  def initialize(page_manager)
    super(page_manager)
    add_element("span_clientes", "element", "text", "- Clientes", self, "always", false)
    add_element("btn_nuevo", "element", "text", "Crear Cliente", self, "always", false)
    add_element("txt_nombre", "text_field", "id", "nombres", self, "always", false)
    add_element("txt_apellido_materno", "text_field", "id", "materno", self, "always", false)
    add_element("txt_apellido_paterno", "text_field", "id", "paterno", self, "always", false)
    add_element("txt_ci", "text_field", "id", "ci", self, "always", false)
    add_element("txt_celular", "text_field", "id", "celular", self, "always", false)
    add_element("txt_email", "text_field", "id", "email", self, "always", false)
    add_element("txt_nombre_empresa", "text_field", "id", "nombre_empresa", self, "always", false)
    add_element("btn_crear", "button", "text", "Enviar", self, "always", false)

  end

  def registrarCliente(oPersona)
    @browser.wait_until{@browser.table(:class => "table table-responsive-md").present?}
    @browser.element(:href => "http://localhost:3500/clientes/creacion").click
    # btn_nuevo.click
    llenarDatos(oPersona)
    btn_crear.click
  end

  def comprobarRegistro(oPersona)
    @browser.wait_until{@browser.table(:class => "table table-responsive-md").td(:text => oPersona.nombre).exists?}
    fila_producto = @browser.table(:class => "table table-responsive-md").tbody.td(:text => oPersona.nombre).parent
    expect(fila_producto.td(:index => 1).text).to eq(oPersona.nombre)
    expect(fila_producto.td(:index => 5).text).to eq(oPersona.ci)
    expect(fila_producto.td(:index => 4).text).to eq(oPersona.email)
  end

  private
  def llenarDatos(oPersona)
    txt_nombre.set oPersona.nombre
    txt_apellido_paterno.set oPersona.apellido_paterno
    txt_apellido_materno.set oPersona.apellido_materno
    txt_ci.set oPersona.ci
    txt_celular.set oPersona.celular 
    txt_email.set oPersona.email
  end

end