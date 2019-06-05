# ANTLR v4 / workspace for PHP target

This repo is a root for `antlr4` subrepo with a `PHP` target and contains `tests` folder as playground.


## About `antlr4` subrepo

 * development begin from original anlr4 v4.7.2;
 * all fixes are made in `php_runtime` branch.


Next files of are added/modified:
 
 * `tool/resources/org/antlr/v4/tool/templates/codegen/Php/Php.stg` - template for generate PHP code;
 * `runtime/Php` - files which must be used in your PHP application (converted from `runtime/JavaScript` target and fixed using `runtime/Java` target);
 * `tool/src/org/antlr/v4/codegen/target/PhpTarget.java` - simple code to serialize data to PHP string and specify list of PHP keywords.
