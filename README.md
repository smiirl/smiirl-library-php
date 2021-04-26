# Smiirl SDK for PHP - Version 1

The **Smiirl SDK for PHP** makes it easy for developers to interact with Smiirl custom counters in their PHP code, 

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

## Quick Examples

### Create a Smiirl SDK

```php
<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Smiirl\SmiirlSdkPhp;

// Instantiate an sdk.
$smiirlSdk = new SmiirlSdkPhp();
```

### returning a valid JSON:
```php
<?php
    $smiirlSdk->jsonUrl(12345);
```

### Update the number displayed on a counter
In https://my.smiirl.com:
- Go to the `Settings` of your counter.
- Change its options to `"PUSH NUMBER"`. 
- Collect the `CURL Endpoint` of your counter;
 it should look like 
```http://api.smiirl.com/YOU_MAC/set-number/YOUR_TOKEN/YOUR_NUMBER```. 
```php
<?php
    list($mac,$token) = $smiirlSdk->listCurlUrlAccessParameters(
        "http://api.smiirl.com/YOU_MAC/set-number/YOUR_TOKEN/YOUR_NUMBER"
    );
    $apiResponse = $smiirlSdk->pushNumberOnCounter($mac,$token,12345);
    // var_dump($apiresponse)
```


