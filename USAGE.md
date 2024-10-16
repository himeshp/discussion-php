<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use OpenAPI\OpenAPI;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = OpenAPI\Discussion::builder()->setSecurity($security)->build();



$response = $sdk->listDiscussionsForRepo(
    owner: '<value>',
    repo: '<value>'

);

if ($response->responseBodies !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->