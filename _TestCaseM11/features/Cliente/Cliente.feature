Feature: Gestion de Clientes

  Background:
    Given Usuario se ha loggeado en el sistema
    
  Scenario: Registro de un nuevo cliente
    Given Usuario esta en la pagina de Gestion de Clientes 
    When Usuario registra un nuevo cliente con todos los datos establecidos
