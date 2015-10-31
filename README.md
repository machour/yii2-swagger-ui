# yii2-swagger-ui

Yii2 Swagger UI Asset

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

Once the extension is installed, you can include the swagger ui assets in your code like this :

```php

machour\yii2\swagger\ui\SwaggerUiAsset::register($this);

```