<?php

namespace dynamikaweb\cookieconsent;

class CookieConsentAssetCDN extends \yii\web\AssetBundle
{
    public $css = [
        '//cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css',
    ];

    public $js = [
        '//cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js',
    ];
}