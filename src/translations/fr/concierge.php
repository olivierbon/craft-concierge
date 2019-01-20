<?php
/**
 * Concierge Translations 
 *
 * @author    Olivier Bon
 * @package   Concierge
 * @since     2.1.0
 *
 */
return [
    // Concierge UI
    // =========================================================================
    
    /* Listing Page */
    'Awaiting activation' => 'En attente d\'activation',
    'Concierge Settings' => 'Paramètres de Concierge',
    /* Settings Page*/
    '"Awaiting moderation" message' => 'Message: "En attente d\'activation"',
    'Send a holding email to the user' => 'Envoyer un message de mise en attente',
    '"Account Activated" message' => 'Message: "Compte Activé"',
    'Send an email to the user once account is unsuspended' => 'Envoyer un message quand l\'utilisateur est activé',
    '"Notification of new regitration" message' => 'Message: "Notification de nouvel utilisateur"',
    'Send a notification of new registration to admin/mod' => 'Envoyer une notification à l\'admin/moderateur quand un nouvel utilisateur s\'enregistre',
    'Moderator Email Overide' => 'Modifier l\'email du moderateur',
    'Email address' => 'Adresse email',
    'Moderator notification are sent to the admin email by default but you can overide this below.' => 'Les notification de nouvel utilisateur sont envoyer a l\'email de l\'admin par défaut, entrez une adresse ci dessous pour modifier ce paramètre',
    /* Dashboard Widget */
    'user' => 'utilisateur',
    'awaiting moderation' => 'en attente d\'activation',
    'Go activate' => 'Allez activer',
    'You do not have any pending registrations' => 'Vous n\'avez aucun utilisateur en attente',


    // Concierge Messages
    // =========================================================================

    /* Holding message to user */
    'concierge_moderation_heading' => 'Concierge - Message: "En attente d\'activation" (à l\'utilisateur) :',
    'concierge_moderation_subject' => 'Votre compte a été crée!',
    'concierge_moderation_body' => "Bonjour {{user.friendlyName}},\n\n" .
    "Merci de nous joindre sur {{ siteName }}. Un administrateur va activer votre compte et un email de comfirmation vous sera envoyé très bientôt.\n\n Merci de votre patience.",
    /* User Actived to user */
    'concierge_activated_heading' => 'Concierge - Message: "Compte Activé" (à l\'utilisateur) :',
    'concierge_activated_subject' => 'Votre compte a été activé!',
    'concierge_activated_body' => "Bonjour {{user.friendlyName}},\n\n" .
    "Une fois de plus, merci de nous joindre sur {{siteName}}! Votre compte a été activé et est prêt à l'emploi. \n\n Visitez {{siteUrl}} pour vous connecter. \n\n À bientôt! ",
    /* User registration email to admin/moderator */
    'concierge_mod_notification_heading' => 'Concierge - Message: "Notification de nouvel utilisateur" (à l\'admin/moderateur) :',
    'concierge_mod_notification_subject' => 'Nouvelle régistration sur {{siteName}}',
    'concierge_mod_notification_body' => "Bonjour,\n\n" .
    "Quelqu'un vient de s'enregistrer sur {{siteName}} et le compte est en attente d'activation. \n\n" .
    "Visitez {{siteUrl}}admin pour prendre action."
];
