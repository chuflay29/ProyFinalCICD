require 'empleado.rb'

Given(/^Usuario esta en la pagina de Gestion de Empleados$/) do
    page_manager.go_to(PmEmpleado::URL)
end



When(/^Usuario registra un nuevo empleado con todos los datos establecidos$/) do
    @oEmpleado = Empleado.nuevoEmpleado
    page.registrarEmpleado(@oEmpleado)
end

Then(/^Se comprueba el registro en base de datos de la nueva persona$/) do
    page.comprobarRegistro(@oEmpleado)
end
