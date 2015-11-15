# yii2-swagger-ui

[Swagger UI](http://swagger.io/swagger-ui/) assets for Yii2.

[![Latest Stable Version](https://poser.pugx.org/machour/yii2-swagger-ui/v/stable)](https://packagist.org/packages/machour/yii2-swagger-ui)
[![Total Downloads](https://poser.pugx.org/machour/yii2-swagger-ui/downloads)](https://packagist.org/packages/machour/yii2-swagger-ui)
[![Latest Unstable Version](https://poser.pugx.org/machour/yii2-swagger-ui/v/unstable)](https://packagist.org/packages/machour/yii2-swagger-ui)
[![License](https://poser.pugx.org/machour/yii2-swagger-ui/license)](https://packagist.org/packages/machour/yii2-swagger-ui)

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