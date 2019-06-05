# ANTLR v4 / workspace for PHP target

This repo is a root for `antlr4` subrepo with a `PHP` target and contains `tests` folder as playground.


## About `antlr4` subrepo

	* development begin from original anlr4 v4.7.2;
	* all fixes are made in `php_runtime` branch.

Next files are added/modified:
 
	* `tool/resources/org/antlr/v4/tool/templates/codegen/Php/Php.stg` - template for generate PHP code;
	* `runtime/Php` - files which must be used in your PHP application (converted from `runtime/JavaScript` target and fixed using `runtime/Java` target);
	* `tool/src/org/antlr/v4/codegen/target/PhpTarget.java` - simple code to serialize data to PHP string and specify list of PHP keywords.


## Notes

	* now basically tested with a `visitor` model (`listener` not tested at all);
	* context classes are generated inside `*Parser.php` file, so you need a special code to php classes autoloading work (see `tests`).


## Contributing

	* install latest [JDK](https://www.oracle.com/technetwork/java/javase/downloads/index.html);
	* install [Maven](https://maven.apache.org/);
	* clone this repo;
	* goto `tests/basic` and run `build_antlr_and_generate.cmd`.

Now shell helpers work on `Windows` (`build_antlr_and_generate.cmd` and `generate.cmd`).
If you have `*nix`, please, write `*.sh` alternatives.
