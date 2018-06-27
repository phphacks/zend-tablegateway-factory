# ![](https://i.imgur.com/ry6pNLD.png)

[![Maintainability](https://api.codeclimate.com/v1/badges/0971942e97c9c8c0fec3/maintainability)](https://codeclimate.com/github/phphacks/zend-tablegateway-factory/maintainability)

### Setup the factory

All the factory requires is a database adapter.
```php
$adapter = $serviceLocator->get('Zend/Db/Adapter/Adapter');
$factory = new TableGatewayFactory($adapter);
```

### Getting a TableGateway

Since you have provided the adapter now you can directly create the TableGateway using just the table name or also a schema name.
```php
$users = $factory->create('users');
$users = $factory->create('users', 'myAuthSchema');
```

### Running the commands

Now the [TableGateway](https://framework.zend.com/manual/2.2/en/modules/zend.db.table-gateway.html) is created, you can use it like it have always been.

```php
$rows = $users->select([
   'username' => 'admin',
   'password' => 'nimda'
])->toArray();
```
