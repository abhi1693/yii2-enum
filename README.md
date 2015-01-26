Yii2-Enum
=========

[![Code Climate](https://codeclimate.com/github/abhi1693/yii2-enum/badges/gpa.svg)](https://codeclimate.com/github/abhi1693/yii2-enum)
[![Latest Stable Version](https://poser.pugx.org/abhi1693/yii2-enum/v/stable.svg)](https://packagist.org/packages/abhi1693/yii2-enum) [![Total Downloads](https://poser.pugx.org/abhi1693/yii2-enum/downloads.svg)](https://packagist.org/packages/abhi1693/yii2-enum) [![Latest Unstable Version](https://poser.pugx.org/abhi1693/yii2-enum/v/unstable.svg)](https://packagist.org/packages/abhi1693/yii2-enum) [![License](https://poser.pugx.org/abhi1693/yii2-enum/license.svg)](https://packagist.org/packages/abhi1693/yii2-enum)

## Documentation

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```
php composer.phar require --prefer-dist abhi1693/yii2-enum "*"
```
or add
```
"yii2mod/yii2-enum": "*"
```
to the require section of your `composer.json` file.

Usage
-----

The `BaseEnum` class provides support for enumerated types. The class also provides functionality that may be useful in the course of creating and validation enums. To make use of it, you simply create your own class that extends `BaseEnum`:

```
use abhimanyu\enum\helpers;

class Month extends Enum
{
    const January = 1;
    const February = 2;
    const March = 3;
    const April = 4;
    const May = 5;
    const June = 6;
    const July = 7;
    const August = 8;
    const September = 9;
    const October = 10;
    const November = 11;
    const December = 12;
}
```

There are multiple ways to create a new value for an enumerated type:
```
// static call
$month = Month::May();

// direct instantiation
$month = new Month(Month::May);

// by value
$month = Month::createByValue(5);

// by name
$month = Month::createByName('May');
```

It is possible to retrieve the name and value of the instance of the enumerated type:
```
$name = $month->getName();
$value = $month->getValue();
```
> **NOTE:** If you have multiple class constants defined with the same value, then an array of names will be returned instead of a string for only one. It will be up to you to decide which to use.

The class also provides ways of validating names and values:
```
if (Month::isValidName('May')) {
    // it is valid
}

if (Month::isValidValue($value)) {
    // it is valid
}
```

If you need to retrieve a complete list of possible enum values, you can get them either by name or value:
```
$constantsByName = Month::getConstantsByName();

echo $constantsByName['May']; // 5

$constantsByValue = Month::getConstantsByValue();

echo $constantsByValue[5]; // "May"
```
#### How to contribute?

Contributing instructions are located in [CONTRIBUTING.md](CONTRIBUTING.md) file.

## License

Yii2-Enum is released under the MIT License. See the bundled [LICENSE](LICENSE) for details.
