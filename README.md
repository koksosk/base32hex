# Base32Hex library

[![Build Status](https://travis-ci.org/koksosk/base32hex.svg)](https://travis-ci.org/koksosk/base32hex)

Koksosk\Base32Hex is simple and easy to use library class for base32hex encoding/decoding.

Base32Hex class provides two main static methods: **encode** and **decode** to encode/decode
input string and also two other helper static methods to convert string from/to binary string.

See the `docs/` directory for generated API documentation.

Koksosk\Base32Hex requires PHP 5.3+.

## Installation

The preferred method of installation is via [Packagist][], as this provides
the PSR-0 autoloader functionality. The following `composer.json` will download
and install the latest version of the Koksosk\Base32Hex library into your project:

```json
{
    "require": {
        "koksosk/base32hex": "*"
    }
}
```

## Examples

To **encode** string to base32hex string use this:

```php
// Encoding string 'Hello' to base32hex string
$s = new \Koksosk\Base32Hex::encode('Hello');

var_dump($s);
```

This produces the following output:

```
string(8) "91IMOR3F"
```

You might want also **decode** base32hex string to string:

```php
// Decoding string from base32hex string '91IMOR3F'
$s = new \Koksosk\Base32Hex::decode('91IMOR3F');

var_dump($s);
```

This produces the following output:

```
string(5) "Hello"
```

## License

Copyright &copy; 2014 Tomas Chvostek.

Licensed under the MIT License.

[phpdoc-md]: https://github.com/evert/phpdoc-md
[packagist]: http://packagist.org/
