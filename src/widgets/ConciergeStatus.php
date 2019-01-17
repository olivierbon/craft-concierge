<?php

namespace ob\concierge\widgets;

use Craft;
use craft\base\Widget;
use craft\elements\User;
use ob\concierge\Concierge;
use ob\concierge\assetbundles\conciergestatus\ConciergeStatusAsset;

/**
 * ConciergeStatus Class 
 *
 * @author    Olivier Bon
 * @package   Concierge
 * @since     2.0.0
 *
 */
class ConciergeStatus extends Widget
{

    // Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('concierge', 'Concierge');
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@ob/concierge/assetbundles/conciergestatus/dist/img/Concierge-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function maxColspan()
    {
        return null;
    }

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getBodyHtml()
    {
        Craft::$app->getView()->registerAssetBundle(ConciergeStatusAsset::class);

        $suspendedUsersCount = User::find()
            ->status('suspended')
            ->lastLoginDate(':empty:')
            ->count();

        return Craft::$app->getView()->renderTemplate(
            'concierge/_components/widgets/Concierge_body',
            [
                'count' => $suspendedUsersCount
            ]
        );
    }
}
