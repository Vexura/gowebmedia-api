## Navigation
* [get](#get)
* [getInvoices](#getInvoices)
* [CurrentUsage](#CurrentUsage)

Initiate the client:
```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';
// Use the library namespace
use GoWebMediaAPI\GoWebMediaAPI;
// Then simply pass your API-Token when creating the API client object.
$client = new GoWebMediaAPI('API-Token');
```

### get
```php
$response = $client->customer()->get();
print_r($response);
```

### getInvoices
```php
$response = $client->customer()->invoices();
print_r($response);
```

### CurrentUsage
```php
$response = $client->customer()->usage();
print_r($response);
```