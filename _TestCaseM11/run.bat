@echo ON
if [%1]==[] goto todo
cucumber.bat %* --retry 2 -f pretty -f junit -out %CD%\ut
goto :eof
:todo
cucumber.bat .\features\Productos\* .\features\Cliente\* .\features\Empleado\* --retry 2 -f pretty -f junit -out %CD%\ut
