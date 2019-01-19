<?php

namespace olivierbon\concierge\services;

use Craft;
use craft\elements\User;
use yii\base\Component;
use yii\base\Model;

/**
 * ConciergeMailer Class 
 *
 * @author    Olivier Bon
 * @package   Concierge
 * @since     2.0.0
 *
 */
class ConciergeMailer extends Component
{
    protected $settings;

    public function __construct()
    {
        $this->settings = \olivierbon\concierge\Concierge::getInstance()->getSettings();
    }

    public function sendAwaitingModerationEmail(User $user)
    {
        self::send($user,'concierge_moderation');
        return true;
    }

    public function sendUserUnsuspendedEmail(User $user)
    {
        self::send($user,'concierge_activated');
        return true;
    }

    public function sendNewUserRegistrationEmail()
    {
        $emailSettings = Craft::$app->systemSettings->getSettings('email');
        $user = new User();
        $user->email = ($this->settings->moderatorEmail) ? $this->settings->moderatorEmail : $emailSettings['fromEmail'];
        
        self::send($user,'concierge_mod_notification');
    }

    protected function send(User $user, string $message)
    {
        Craft::$app->getMailer()
        ->composeFromKey($message)
        ->setTo($user)
        ->send();
        return true;
    }
}
