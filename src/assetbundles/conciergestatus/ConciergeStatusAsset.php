<?php

namespace olivierbon\concierge\assetbundles\conciergestatus;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * ConciergeStatusAsset Class 
 *
 * @author    Olivier Bon
 * @package   Concierge
 * @since     2.0.0
 *
 */
class ConciergeStatusAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@olivierbon/concierge/assetbundles/conciergestatus/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->css = [
            'css/Concierge.css',
        ];

        parent::init();
    }
}
