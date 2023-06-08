## Navigation
* [start](#start)
* [shutdown](#shutdown)
* [kill](#kill)
* [restart](#restart)
* [osList](#osList)
* [reinstall](#reinstall)
* [create](#create)
* [delete](#delete)
* [edit](#edit)
* [backups](#backups)
* [backupCreate](#backupCreate)
* [backupDelete](#backupDelete)


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

### start
```php
$vm_id = 1;
$response = $client->rootServer()->manage()->start($vm_id);
print_r($response);
```

### shutdown
```php
$vm_id = 1;
$response = $client->rootServer()->manage()->shutdown($vm_id);
print_r($response);
```

### kill
```php
$vm_id = 1;
$response = $client->rootServer()->manage()->kill($vm_id);
print_r($response);
```

### restart
```php
$vm_id = 1;
$response = $client->rootServer()->manage()->restart($vm_id);
print_r($response);
```

### osList
```php
$response = $client->rootServer()->manage()->osList();
print_r($response);
```

### reinstall
```php
$vm_id = 1;
$os_id = 333;
$root_password = "test132!";
$response = $client->rootServer()->manage()->reinstall($vm_id, $os_id, $root_password);
print_r($response);
```

### create
```php
$cpu_type = "xeon" //xeon or ryzen
$hostname = "test.gowebmedia.net"
$cores = 4
$disk = 10
$ram = 1024
$backups = 1;
$root_password = "test124!";
$os_id = 333;
$ipv4 = 1;
$ipv6 = 0
$response = $client->rootServer()->manage()->create($vm_id, $os_id, $root_password);
print_r($response);
```

### delete
```php
$vm_id = 1;
$response = $client->rootServer()->manage()->delete($vm_id);
print_r($response);
```

### edit
```php
$cores = 4
$disk = 10
$ram = 1024
$backups = 1;
$ipv4 = 1;
$ipv6 = 0
$response = $client->rootServer()->manage()->edit($vm_id, $os_id);
print_r($response);
```

### backups
```php
$vm_id = 1;
$response = $client->rootServer()->backups()->get($vm_id);
print_r($response);
```

### backupCreate
```php
$vm_id = 1;
$response = $client->rootServer()->backups()->create($vm_id);
print_r($response);
```

### backupDelete
```php
$vm_id = 1;
$backup_id = '1212';
$response = $client->rootServer()->backups()->delete($vm_id);
print_r($response);
```