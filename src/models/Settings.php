<?php

namespace olivierbon\concierge\models;

use craft\base\Model;

/**
 * Concierge Plugin Settings 
 *
 * @author    Olivier Bon
 * @package   Concierge
 * @since     2.0.0
 *
 */
class Settings extends Model
{
    /**
    * @var bool
    */
    public $concierge_moderation_enabled = false;

   /**
    * @var bool
    */
    public $concierge_activated_enabled = false;

    /**
     * @var bool
     */
    public $concierge_mod_notification_enabled = false;

    /**
     * @var string|null
     */
    public $moderatorEmail;

    public function init()
    {
        parent::init();

        if ($this->concierge_moderation_enabled === null) {
            $this->concierge_moderation_enabled = false;
        }

        if ($this->concierge_activated_enabled === null) {
            $this->concierge_activated_enabled = false;
        }

        if ($this->concierge_mod_notification_enabled === null) {
            $this->concierge_mod_notification_enabled = false;
        }
    }

    public function rules()
    {
        return [

            [['concierge_moderation_enabled',
              'concierge_activated_enabled',
              'concierge_mod_notification_enabled'],
            'boolean'],

            ['moderatorEmail', 'email']
        ];
    }
}
