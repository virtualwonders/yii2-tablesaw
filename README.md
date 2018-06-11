Tablesaw plugin for YFP
=======================
Tablesaw plugin for YFP

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist virtualwonders/yii2-tablesaw "*"
```

or add

```
"virtualwonders/yii2-tablesaw": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \virtualwonders\tablesaw\TableSawAsset::register($view); ?>```