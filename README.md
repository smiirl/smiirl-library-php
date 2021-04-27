# Smiirl SDK for PHP - Version 1

The **Smiirl SDK for PHP** makes it easy for developers to interact with Smiirl Custom Counters in their PHP code, 

## Getting Started

1. **Minimum requirements** – To run the SDK, your system will need to meet the
   minimum requirements, including having **PHP >= 7.0**.
   We highly recommend having it compiled with the cURL extension and cURL
   7.16.2+ compiled with a TLS backend (e.g., NSS or OpenSSL).
1. **Install the SDK** – Using [Composer] is the recommended way to install the
   Smiirl SDK for PHP. The SDK is available via [Packagist] under the
   [`smiirl/smiirl-sdk-php`][install-packagist] package. If Composer is installed globally on your system, you can run the following in the base directory of your project to add the SDK as a dependency:
   ```
   composer require smiirl/smiirl-sdk-php
   ```

## How does the Custom Counter works

A Smiirl Custom Counter could be display a number via 2 methods: JSON & PUSH.

### JSON: output a valid JSON

The JSON method consists in exposing a valid endpoint that the counter will monitor. For example, if you set the counter to monitor this URL https://api.smiirl.com/number, your counter will display 1. For this method, you need a webserver to host your code.

**Example:**

```php
<?php
use Smiirl\Counter;

Counter::jsonResponse(12345);
```

### PUSH: sending a number via 

The PUSH method consists in sending a number to Smiirl API which will display the number on the counter. For this, you will require the Counter Identifier (```$mac```) and a Counter Token (```$token```) that you can find on http://my.smiirl.com.

**Example:**
```php
<?php
use Smiirl\Counter;

$mac = "e08e00000000";
$token = "abcdef123456";

$counter = new Counter($mac, $token);
$counter->push(54321);
```

## Custom Counters

Smiirl Custom Counters are available on our website https://www.smiirl.com.

