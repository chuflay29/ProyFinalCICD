
Given(/^Usuario se ha loggeado en el sistema$/) do
    page_manager.go_to(PmLogin::URL)
    page.login("ariel@chacon.com", "chaca22")
  end



Given(/^Usuario carga los fixtures para la base de datos$/) do
    $client.cargarFixtures()
  end