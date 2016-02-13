# nia - Parsing Component

The parsing component provides an interface for specific value parsing.

## Installation

Require this package with Composer.

```bash
	composer require nia/parsing
```

## Tests
To run the unit test use the following command:

    $ cd /path/to/nia/component/
    $ phpunit --bootstrap=vendor/autoload.php tests/

## How to use
The package provides only a implementation of a null object parser which parses nothing. For parsing numeric values you can use the `nia/parsing-numeric` component.
