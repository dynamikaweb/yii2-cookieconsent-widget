dynamikaweb/yii2-cookieconsent-widget
=========================
![php version](https://img.shields.io/packagist/php-v/dynamikaweb/yii2-cookieconsent-widget)
![pkg version](https://img.shields.io/packagist/v/dynamikaweb/yii2-cookieconsent-widget)
![license](https://img.shields.io/packagist/l/dynamikaweb/yii2-cookieconsent-widget)
![quality](https://img.shields.io/scrutinizer/quality/g/dynamikaweb/yii2-cookieconsent-widget)
![build](https://img.shields.io/scrutinizer/build/g/dynamikaweb/yii2-cookieconsent-widget)

Documentation
-------------

 * [Usage](#usage)
 * [Installation](#installation)
 * [Plugin Options](https://www.osano.com/cookieconsent/documentation/javascript-api)
 * [Cookie Consent Source](https://github.com/osano/cookieconsent)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```SHELL
$ composer require dynamikaweb/yii2-cookieconsent-widget "*"
```

or add

```JSON
"dynamikaweb/yii2-cookieconsent-widget": "*"
```

to the `require` section of your `composer.json` file.

Usage
-----
```PHP

use dynamikaweb\cookieconsent\CookieConsent;

echo CookieConsent::widget([
  'assetType' => CookieConsent::ASSET_TYPE_CDN,
  'pluginOptions' => [
      # see examples: https://www.osano.com/cookieconsent/documentation/javascript-api
  ]
]);
```

--------------------------------------------------------------------------------------------------------------
[![dynamika soluções web](https://avatars.githubusercontent.com/dynamikaweb?size=12)](https://dynamika.com.br)
This project is under [BSD-3-Clause](https://opensource.org/licenses/BSD-3-Clause) license.
