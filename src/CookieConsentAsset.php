<?php

namespace dynamikaweb\cookieconsent;

class CookieConsentAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/cookieconsent/build';

    public $css = [
        'cookieconsent.min.css',
    ];

    public $js = [
        'cookieconsent.min.js',
    ];
}