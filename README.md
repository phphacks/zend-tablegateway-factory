# ![](https://i.imgur.com/ry6pNLD.png)

[![Maintainability](https://api.codeclimate.com/v1/badges/0971942e97c9c8c0fec3/maintainability)](https://codeclimate.com/github/phphacks/zend-tablegateway-factory/maintainability)

### Setup the factory

All the factory requires is a database adapter.
```php
$adapter = $serviceLocator->get('Zend/Db/Adapter');
$factory = new TableGatewayFactory($adapter);
```

### Getting a TableGateway

Since you have provided the adapter now you can directly create the TableGateway using a string or a TableIdentifier object as identifier, like in the example below.
