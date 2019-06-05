@SETLOCAL

@IF NOT EXIST antlr4\NUL mklink /D antlr4 ..\..\antlr4\runtime\Php

@rmdir /S /Q generated>nul

@SET CLASSPATH=%~dp0..\..\antlr4\tool\target\antlr4-4.7.2-complete.jar;%CLASSPATH%
@java org.antlr.v4.Tool -o generated -Dlanguage=Php -visitor -no-listener -package generated Expression.g4

@del /Q generated\*.interp
@del /Q generated\*.tokens

@ENDLOCAL 
