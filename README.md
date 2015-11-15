[Swagger UI](http://swagger.io/swagger-ui/) assets for Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist machour/yii2-swagger-ui "*"
```

or add

```
"machour/yii2-swagger-ui": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you can register the Swagger UI assets in your application by doing:

```php
machour\yii2\swagger\ui\SwaggerUiAsset::register($this);
```

A complete layout structure is available in the `views` directory for a complete working Swagger UI interface like their [Pet Store](http://petstore.swagger.io/).

This documentation is available [online](http://machour.idk.tn/yii/machour/yii2-swagger-ui)
