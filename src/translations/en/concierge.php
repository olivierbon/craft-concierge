<?php
/**
 * Concierge Translations 
 *
 * @author    Olivier Bon
 * @package   Concierge
 * @since     2.0.0
 *
 */
return [
    // Concierge UI
    // =========================================================================
    
    /* Listing Page */
    'Awaiting activation' => 'Awaiting activation',
    'Concierge Settings' => 'Concierge Settings',
    /* Settings Page*/
    '"Awaiting moderation" message' => '"Awaiting moderation" message',
    'Send a holding email to the user' => 'Send a holding email to the user',
    '"Account Activated" message' => '"Account Activated" message',
    'Send an email to the user once account is unsuspended' => 'Send an email to the user once account is unsuspended',
    '"Notification of new regitration" message' => '"Notification of new regitration" message',
    'Send a notification of new registration to admin/mod' => 'Send a notification of new registration to admin/mod',
    'Moderator Email Overide' => 'Moderator Email Overide',
    'Email address' => 'Email address',
    'Moderator notification are sent to the admin email by default but you can overide this below.' => 'Moderator notification are sent to the admin email by default but you can overide this below.',
    /* Dashboard Widget */
    'user' => 'user',
    'awaiting moderation' => 'awaiting moderation',
    'Go activate' => 'Go activate',
    'You do not have any pending registrations' => 'You do not have any pending registrations',


    // Concierge Messages
    // =========================================================================

    /* Holding message to user */
    'concierge_moderation_heading' => 'Concierge - Awaiting moderation Message (to user only):',
    'concierge_moderation_subject' => 'Your registration was successfull',
    'concierge_moderation_body' => "Hey {{user.friendlyName}},\n\n" .
    "Thanks for creating an account with {{siteName}}! Your registration was successfull. An administrator will activate your account soon and a confirmation email will be sent to you.\n\n",
    /* User Actived to user */
    'concierge_activated_heading' => 'Concierge - Account Activated message (to user only):',
    'concierge_activated_subject' => 'Your account has been activated',
    'concierge_activated_body' => "Hey {{user.friendlyName}},\n\n" .
    "Thanks again for creating an account with {{siteName}}! Your account has been activated and is now ready for use. \n\n",
    /* User registration email to admin/moderator */
    'concierge_mod_notification_heading' => 'Concierge - Notification of new regitration (to mods/admin only):',
    'concierge_mod_notification_subject' => 'New registration on {{siteName}}',
    'concierge_mod_notification_body' => "Hey,\n\n" .
    "Someone registered on {{siteName}} and the account is awaiting unsuspention. \n\n" .
    "Visit {{siteUrl}}admin to review."
];
