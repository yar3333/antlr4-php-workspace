@SETLOCAL

@rmdir /S /Q generated>nul

@cd ..\..\antlr4
call mvn install -DskipTests=true
@cd %~dp0

@call generate.cmd

@ENDLOCAL 
