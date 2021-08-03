<?php 

namespace dynamikaweb\cookieconsent;

use yii\helpers\Json;

class CookieConsent extends \yii\base\Widget 
{
    const ASSET_TYPE_CDN = 1;
    const ASSET_TYPE_LOCAL = 2;

    public $pluginOptions;

    public $assetType = self::ASSET_TYPE_LOCAL;

    /**
     * Registers the needed assets.
     *
     * @param View $view The View object
     */
    public function registerAssets($view)
    {
        if($this->assetType == self::ASSET_TYPE_LOCAL) {
            CookieConsentAsset::register($view);
        } else {
            CookieConsentAssetCDN::register($view);
        }

        $view->registerJs(strtr('window.cookieconsent.initialise({pluginOptions});', [
            '{pluginOptions}' => Json::encode($this->pluginOptions),
        ]),
            $view::POS_END
        );
    }

    /**
     * @return null
     */
    public function run()
    {
        $this->registerAssets($this->getView());
        return null;
    }
}