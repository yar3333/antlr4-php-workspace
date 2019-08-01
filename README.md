# ANTLR v4 / workspace for PHP target

This repo is a root for [antlr4](https://github.com/yar3333/antlr4) subrepo with a `PHP` target and contains `examples` folder as playground.

For using manual see [antlr4-php-runtime](https://github.com/yar3333/antlr4-php-runtime).

## Notes

 * now tested with a `visitor` model (`listener` not tested at all);
 * context classes are generated inside `*Parser.php`, so you need a code to correct autoloading (see `examples`).

## About `antlr4` subrepo

 * development begin from original anlr4 v4.7.2;
 * all fixes are made in `php_runtime` branch.

Next files are added/modified:
 
 * `tool/resources/org/antlr/v4/tool/templates/codegen/Php/Php.stg` - template for generate PHP code;
 * `runtime/Php` - files which must be used in your PHP application (converted from `runtime/JavaScript`and fixed using `runtime/Java` as a reference);
 * `tool/src/org/antlr/v4/codegen/target/PhpTarget.java` - used by code generator (serialize data to PHP string, list of PHP keywords...);
 * several fixes in antlr4 core (because PHP does not support nested classes, but original antlr4 expect this feature supported).

## Contributing

 * install latest [JDK](https://www.oracle.com/technetwork/java/javase/downloads/index.html);
 * install [Maven](https://maven.apache.org/);
 * clone this repo (`git clone --recurse-submodules https://github.com/yar3333/antlr4-php-workspace.git`);
 * goto `tests/basic` and run `build_antlr_and_generate.cmd`;
 * open `tests/basic` in your IDE (setting for `phpstorm` already in repo):
	* `antlr4` - link to antlr4 folder contains PHP classes used in runtime;
	* `Gram.g4` - grammar file;
	* `Gram.php` - PHP entry point.

Now shell helpers work on `Windows` (`build_antlr_and_generate.cmd` and `generate.cmd`).
If you have `*nix`, please, write `*.sh` alternatives.
