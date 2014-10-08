
# About

Base32Hex is simple and easy to use class for `base32hex` encoding/decoding.
Learn more about `base32hex` in this [wiki section][wiki] or in [RFC 2938][rfc] standard document.

# Base32Hex library

[![Build Status](https://travis-ci.org/koksosk/base32hex.svg)](https://travis-ci.org/koksosk/base32hex)
[![Latest Stable Version](https://poser.pugx.org/koksosk/base32hex/v/stable.svg)](https://packagist.org/packages/koksosk/base32hex)
[![Total Downloads](https://poser.pugx.org/koksosk/base32hex/downloads.svg)](https://packagist.org/packages/koksosk/base32hex)
[![Latest Unstable Version](https://poser.pugx.org/koksosk/base32hex/v/unstable.svg)](https://packagist.org/packages/koksosk/base32hex)
[![License](https://poser.pugx.org/koksosk/base32hex/license.svg)](https://packagist.org/packages/koksosk/base32hex)

Base32Hex class implements `base32hex` algorithm (as stated in [RFC 2938][rfc]) and implements these two main static methods:
 * [Koksosk\Base32Hex::encode($string)](#encode)
 * [Koksosk\Base32Hex::decode($string)](#decode)

Also these helper functions are included:
 * [Koksosk\Base32Hex::stringToBinary($string)](#string-to-binary)
 * [Koksosk\Base32Hex::binaryToString($string)](#binary-to-string)

See [Usage][#usage] section below to see examples of usage.
See the `docs/` folder for generated API documentation.

## Important note

Please don't **CONFUSE** [base32hex][rfc] with [base32][rfcbase32] encoding, which looks is similar but it is different standard.

## Requirements

**Koksosk\Base32Hex** requires `PHP 5.3+`, that's all.

## Installation

The preferred method of installation is via [Packagist][], as this provides
the `PSR-0` autoloader functionality. The following `composer.json` will download
and install the latest version of the **Koksosk\Base32Hex** library into your project:

```json
{
    "require": {
        "koksosk/base32hex": "*"
    }
}
```

## Usage examples

#### Encode

Encoding string to base32hex.

```php
// Encoding string 'Hello' to base32hex string
$s = \Koksosk\Base32Hex::encode('Hello');

var_dump($s);
```

This produces the following output:

```
string(8) "91IMOR3F"
```

#### Decode

Decoding string from base32hex string.

```php
// Decoding string from base32hex string '91IMOR3F'
$s = \Koksosk\Base32Hex::decode('91IMOR3F');

var_dump($s);
```

This produces the following output:

```
string(5) "Hello"
```

#### String to binary

Convert string to binary string

```php
// Converting string "Hello" to binary string
$s = \Koksosk\Base32Hex::stringToBinary("Hello");

var_dump($s);
```

This produces the following output (length = 40bits = strlen("Hello") * 8 bits = 5 * 8 bits):

```
string(40) "0100100001100101011011000110110001101111"
```

#### Binary to string

Convert binary string to string

```php
// Converting binary string "0100100001100101011011000110110001101111" to string
$s = \Koksosk\Base32Hex::binaryToString("0100100001100101011011000110110001101111");

var_dump($s);
```

This produces the following output:

```
string(40) "Hello"
```
## License

Copyright &copy; 2014 Tomas Chvostek.

Licensed under the MIT License.

[phpdoc-md]: https://github.com/evert/phpdoc-md
[packagist]: http://packagist.org/
[wiki]: http://en.wikipedia.org/wiki/Base32#base32hex
[rfc]: http://tools.ietf.org/rfc/rfc2938
[rfcbase32]: https://tools.ietf.org/html/rfc4648
