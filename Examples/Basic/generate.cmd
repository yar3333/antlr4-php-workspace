@SETLOCAL

@rmdir /S /Q Generated>nul

SET CLASSPATH=%~dp0..\..\antlr4\tool\target\antlr4-4.7.2-complete.jar;%CLASSPATH%
java org.antlr.v4.Tool -o Generated -Dlanguage=Php -visitor -no-listener -package Examples\Basic\Generated Gram.g4

@del /Q Generated\*.interp
@del /Q Generated\*.tokens

@ENDLOCAL 
