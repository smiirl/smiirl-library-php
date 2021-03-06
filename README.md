# Smiirl Library for PHP

The **Smiirl Library for PHP** makes it easy for developers to interact with Smiirl Custom Counters in their PHP code, 

## Getting Started

1. **Minimum requirements** – To run the library, your system will need to meet the
   minimum requirements, including having **PHP >= 7.0**.
   We highly recommend having it compiled with the cURL extension and cURL
   7.16.2+ compiled with a TLS backend (e.g., NSS or OpenSSL).
1. **Install the library** – Using [Composer] is the recommended way to install the
   Smiirl Library for PHP. The library is available via [Packagist] under the
   [`smiirl/smiirl-library-php`][install-packagist] package. If Composer is installed globally on your system, you can run the following in the base directory of your project to add the library as a dependency:
   ```
   composer require smiirl/smiirl-library-php
   ```

## How does the Custom Counter works

A Smiirl Custom Counter could be display a number via 2 methods: JSON & PUSH.

### JSON: output a valid JSON

The JSON method consists in exposing a valid endpoint that the counter will monitor. 
For instance, if you set the counter to monitor this URL https://api.smiirl.com/number, your counter will display 1. 
For this method, you need a webserver to host your code.

**Example:**

```php
<?php
require 'vendor/autoload.php';
use Smiirl\Counter;

Counter::jsonResponse(12345);
```

### PUSH: sending a number via 

The PUSH method consists in sending a number to Smiirl API which will display the number on the counter. For this, you will require the Counter Identifier (```$mac```) and a Counter Token (```$token```) that you can find on http://my.smiirl.com.

**Example:**
```php
<?php
require 'vendor/autoload.php';
use Smiirl\Counter;

$mac = "e08e00000000";
$token = "abcdef123456";

$counter = new Counter($mac, $token);
$counter->reset();
$counter->push(54321);
$counter->add(10);
$counter->add(-10);
```

## Custom Counters

Smiirl Custom Counters are available on our website https://www.smiirl.com.

