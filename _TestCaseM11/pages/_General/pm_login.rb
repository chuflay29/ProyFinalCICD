
class PmLogin < Eirik::Page

  URL = "#{$root_url}"
	
  def initialize(page_manager)
    super(page_manager)
    add_element("username", "text_field", "name", "email", self, "always", false)
    add_element("password", "text_field", "name", "password", self, "always", false)
    add_element("ingresar", "button", "text", "Ingresar", self, "always", true)
  end

  def login(nombre_usuario, contrasena)
    username.set(nombre_usuario)
    password.set(contrasena)
    ingresar.click
  end

end