Feature: Gestion de Clientes

  Background:
    Given Usuario se ha loggeado en el sistema
    
  Scenario: Registro de un nuevo empleado
    Given Usuario esta en la pagina de Gestion de Empleados 
    When Usuario registra un nuevo empleado con todos los datos establecidos
