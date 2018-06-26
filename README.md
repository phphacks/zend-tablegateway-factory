# ![](https://i.imgur.com/ry6pNLD.png)

[![Maintainability](https://api.codeclimate.com/v1/badges/0971942e97c9c8c0fec3/maintainability)](https://codeclimate.com/github/phphacks/zend-tablegateway-factory/maintainability)

### Usage
```php
$adapter = $serviceLocator->get('Zend/Db/Adapter');
$factory = new TableGatewayFactory($adapter);
$users = $factory->create('users');

$rows = $users->select([
   'active' => true
])->toArray();

```
