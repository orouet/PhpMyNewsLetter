<?PHP

function translate($s, $i = "") {
	global $lang_array;
	$sortie = "[Translation required] : " . $s;
	if (isset($lang_array['francais'][$s])) {
		if ($i == "") {
			$sortie = $lang_array['francais'][$s];
		} else {
			$sortie = sprintf($lang_array['francais'][$s] , $i);
		}
	}
	return $sortie;
}


$lang_array['francais'] = array(

	//BOUTONS
	"OK_BTN" => "OK",
	"YES" => "Oui",
	"NO" => "Non",
	"BACK" => "Retour",

	
	//ARCHIVE
	"ARCHIVE_TITLE" => "Archives",
	"ARCHIVE_CHOOSE" => "Sélectionnez une newsletter",
	"ARCHIVE_SUBJECT" => "Sujet",
	"ARCHIVE_DATE" => "Date",
	"ARCHIVE_FORMAT" => "Format",
	"ARCHIVE_DISPLAY" => "Afficher ce message",
	"ARCHIVE_BROWSE" => "Consulter les archives",
	"ARCHIVE_DELETE" => "Supprimer cette archive",
	"ARCHIVE_DELETE_TITLE" => "Suppression d'archive",
	"ARCHIVE_DELETED" => "Archive supprimée avec succes.",
	"ARCHIVE_NOT_FOUND" => "Aucune archive trouvée",

	
	//INDEX
	"PHPMYNEWSLETTER_TITLE" => "phpMyNewsletter",
	"EMAIL_ADDRESS" => "Adresse électronique",
	"EMAIL_ADDRESS_NOT_VALID" => "Cette adresse électronique n'est pas valide",
	"NEWSLETTER_SUBSCRIPTION" => "Inscription",
	"NEWSLETTER_UNSUBSCRIPTION" => "Désinscription",
	"AVAILABLE_NEWSLETTER" => "Newsletter existantes",

	
	//ADMIN LOGIN admin/login.php
	"LOGIN_TITLE" => "Identification",
	"LOGIN_PLEASE_ENTER_PASSWORD" => "Un mot de passe est requis pour accéder à la zone d'administration",
	"LOGIN_PASSWORD" => "Mot de passe",
	"LOGIN" => "Connexion",
	"LOGIN_BAD_PASSWORD" => "Mot de passe incorrect",

	
	//MENU
	"MENU_SUBSCRIBERS"=> "Abonnés",
	"MENU_COMPOSE" => "Rédiger un message",
	"MENU_ARCHIVES" => "Archives",
	"MENU_NEWSLETTER" => "Configurer la newsletter",
	"MENU_LETTRES" => "Gérer les newsletter",
	"MENU_CONFIG" => "Configuration globale",
	"MENU_LOGOUT" => "Quitter",

	
	//
	"SELECTED_NEWSLETTER" => "Newsletter sélectionnée",
	"NEWSLETTER_TOTAL_SUBSCRIBER" => "abonné",
	"NEWSLETTER_TOTAL_SUBSCRIBERS" => "abonnés",


	//ADMIN NEWSLETTER
	"NEWSLETTER_CHOOSE" => "Sélectionnez la newsletter à configurer",
	"NEWSLETTER_ACTION" => "Effectuer une action",
	"NEWSLETTER_NEW" => "Créer une nouvelle newsletter",
	"NEWSLETTER_DEL" => "Supprimer '%s'",
	"NEWSLETTER_SETTINGS" => "Réglages de la newsletter",
	"NEWSLETTER_NAME" => "Nom de la newsletter",
	"NEWSLETTER_FROM_ADDR" => "Adresse électronique de l'expéditeur",
	"NEWSLETTER_FROM_NAME" => "Nom de l'expéditeur",
	"NEWSLETTER_SUBJECT" => "Sujet du message",
	"NEWSLETTER_HEADER" => "Entête du message",
	"NEWSLETTER_FOOTER" => "Pied du message",
	"NEWSLETTER_SUB_MSG_SUBJECT" => "Sujet du message d'abonnement",
	"NEWSLETTER_SUB_MSG_BODY" => "Message d'abonnement",
	"NEWSLETTER_WELCOME_MSG_SUBJECT" => "Sujet du message de bienvenue",
	"NEWSLETTER_WELCOME_MSG_BODY" => "Message de bienvenue",
	"NEWSLETTER_UNSUB_MSG_SUBJECT" => "Sujet du message de désabonnement",
	"NEWSLETTER_UNSUB_MSG_BODY" => "Message de désabonnement",
	"NEWSLETTER_SAVE_SETTINGS" => "Enregistrer ces réglages",
	"NEWSLETTER_SETTINGS_SAVED" => "Réglages enregistrés",
	"NEWSLETTER_CREATE" => "Créer une nouvelle newsletter",
	"NEWSLETTER_SAVE_NEW" => "Créer cette newsletter",
	"NEWSLETTER_DELETED" => "Newsletter supprimée avec succès",
	"NEWSLETTER_DELETE_WARNING" => "Supprimer toutes les informations relatives à cette newsletter",
	"NEWSLETTER_SETTINGS_CREATED" => "Newsletter créée avec succès",
	"NEWSLETTER_DEFAULT_HEADER" =>
		"========= ENTETE =========\n".
		"Mettez ici ce que vous voulez.\n".
		"Ce texte sera ajouté en tête de tous vos messages",
	"NEWSLETTER_DEFAULT_FOOTER" =>
		"======== PIED DE PAGE =======\n".
		"Vous pouvez spécifier un message",
	"NEWSLETTER_SUB_DEFAULT_SUBJECT" => "Merci de confirmer votre inscription",
	"NEWSLETTER_SUB_DEFAULT_BODY" => "Vous avez demandé votre inscription à cette newsletter, merci de suivre les informations qui suivent.",
	"NEWSLETTER_WELCOME_DEFAULT_SUBJECT" => "Bienvenue",
	"NEWSLETTER_WELCOME_DEFAULT_BODY" => "Bienvenue et merci de faire partie des abonnées à cette newsletter",  
	"NEWSLETTER_UNSUB_DEFAULT_SUBJECT" => "Merci de confirmer votre désinscription",
	"NEWSLETTER_UNSUB_DEFAULT_BODY" => "Vous avez demandé votre désinscription de cette newsletter, merci de suivre les informations qui suivent.", 

	
	//SUBSCRIBER
	"SUBSCRIBER_ADD_TITLE" => "Ajouter un abonné",
	"SUBSCRIBER_ADD_BTN" => "Ajouter cette adresse électronique",
	"SUBSCRIBER_ADDED" => "%s ajoutée avec succès",

	"SUBSCRIBER_IMPORT_TITLE" => "Importer une liste d'adresse électronique",
	"SUBSCRIBER_IMPORT_BTN" => "Importer",
	"SUBSCRIBER_IMPORT_HELP" => "Vous pouvez importer une liste d'adresse électronique depuis un fichier.<br />Ce fichier doit suivre le formalisme suivant: une adresse par ligne<br/>adress1@domain.com<br />adress2@domain.com<br/>adress3@domain.com",

	"SUBSCRIBER_DELETE_TITLE" => "Supprimer un abonné",
	"SUBSCRIBER_DELETE_BTN" => "Supprimer cette adresse électronique",
	"SUBSCRIBER_DELETED" => "Abonné supprimé avec succès",

	"SUBSCRIBER_EXPORT_TITLE" => "Exporter les abonnés",
	"SUBSCRIBER_EXPORT_BTN" => "Exporter",

	"SUBSCRIBER_TEMP_TITLE" => "Abonnement en attente de confirmation",
	"SUBSCRIBER_TEMP_BTN" => "Supprimer cette adresse électronique",
	"SUBSCRIBER_TEMP_DELETED" => "Adresse électronique supprimée avec succès",


	//COMPOSE 
	"COMPOSE_NEW" => "Rédiger un nouveau message",
	"COMPOSE_SUBJECT" => "Sujet",
	"COMPOSE_FORMAT" => "Format",
	"COMPOSE_FORMAT_TEXT" => "Texte",
	"COMPOSE_FORMAT_HTML" => "HTML",
	"COMPOSE_FORMAT_HTML_NOTICE" => "(Donner seulement le code html se trouvant entre les balises <em>&lt;body&gt;&lt;/body&gt;</em>)",
	"COMPOSE_PREVIEW" => "Aperçu du message",
	"COMPOSE_RESET" => "Réinitialiser",
	"COMPOSE_PREVIEW_TITLE" => "Aperçu du message",
	"COMPOSE_BACK" => "Retour",
	"COMPOSE_SEND" => "Envoyer ce message",
	"COMPOSE_SENDING" => "Envoi du message ...",
	"COMPOSE_SENT" => "Message envoyé avec succès",


	//GLOBAL CONFIG
	"GCONFIG_TITLE" => "Configuration globale",
	"GCONFIG_DB_TITLE"=> "Réglages de la base de données",
	"GCONFIG_DB_HOST" => "Nom d'hôte",
	"GCONFIG_DB_LOGIN" => "Nom d'utilisateur",
	"GCONFIG_DB_DBNAME" => "Nom de la base de donnée",
	"GCONFIG_DB_PASSWD" => "Mot de passe",
	"GCONFIG_DB_CONFIG_TABLE" => "Table de configuration",
	"GCONFIG_DB_TABLE_MAIL" => "Les adresses électroniques des abonnés sont stockées dans",
	"GCONFIG_DB_TABLE_TEMPORARY" => "Table temporaire",
	"GCONFIG_DB_TABLE_NEWSCONFIG" => "Table de configuration des newsletter",
	"GCONFIG_DB_TABLE_ARCHIVES" => "Les archives sont stockées dans",
	"GCONFIG_DB_TABLE_SUBMOD" => "Les inscriptions en attente de confirmation sont stockées dans",
	"GCONFIG_DB_CONFIG_UNWRITABLE" => "Davantage de réglages seraient disponibles, si le serveur web avait les droits d'écriture sur %s.",
	
	"GCONFIG_MISC_TITLE" => "Réglages divers",
	"GCONFIG_MISC_ADMIN_PASSW" => "Mot de passe d'accès à la zone d'administration",
	"GCONFIG_MISC_ADMIN_PASSW2"=> "(laisser vide si vous ne voulez pas le modifier)",
	"GCONFIG_MISC_BASE_URL" => "URL de base",
	"GCONFIG_MISC_BASE_PATH" => "Chemin de phpMyNewsletter",
	"GCONFIG_MISC_LANGUAGE" => "Langue",

	"GCONFIG_MESSAGE_HANDLING_TITLE" => "Gestion des envois",
	"GCONFIG_MESSAGE_ADMIN_NAME" => "Nom de l'expéditeur par défaut (Champs <i>From:</i>)",
	"GCONFIG_MESSAGE_ADMIN_MAIL" => "Adresse électronique de l'expéditeur par défaut",
	"GCONFIG_MESSAGE_CHARSET" => "Encodage des caractères à utiliser",
	"GCONFIG_MESSAGE_NUM_LOOP" => "Nombre de messages expédiés à chaque boucle d'envoi",
	"GCONFIG_MESSAGE_SEND_METHOD" => "Méthode d'expédition",
	"GCONFIG_MESSAGE_SEND_METHOD_FUNCTION" => "fonction mail() PHP",
	"GCONFIG_MESSAGE_SMTP_HOST" => "Nom d'hôte du serveur SMTP",
	"GCONFIG_MESSAGE_SMTP_PORT" => "Port",
	"GCONFIG_MESSAGE_SMTP_AUTH" => "Authentification SMTP requise ?",
	"GCONFIG_MESSAGE_SMTP_LOGIN" =>"Nom d'utilisateur SMTP",
	"GCONFIG_MESSAGE_SMTP_PASSWORD" => "Mot de passe SMTP",

	"GCONFIG_SUBSCRIPTION_TITLE" => "Inscriptions",
	"GCONFIF_SUBSCRIPTION_VALIDATION_TIMEOUT" => "Les abonnés ont %s jours pour confirmer leur inscription",
	"GCONFIG_SUBSCRIPTION_CONFIRM_SUB" => "Les abonnés doivent-ils confirmer leur inscription ?",
	"GCONFIG_SUBSCRIPTION_CONFIRM_UNSUB" => "Les abonnés doivent-ils confirmer leur désinscription ?",
	"GCONFIG_SUBSCRIPTION_MODERATE" => "Les inscriptions sont modérées ?",

	"GCONFIG_SAVE_BTN" => "Enregistrer ces réglages",
	"GCONFIG_SUCCESSFULLY_SAVED" => "Configuration globale enregistrée avec succès",


	//ERROR
	"ERROR_SQL" => "Erreur de la base de donnée : %s",
	"ERROR_SQL2" => "Erreur SQL : %s",

	"ERROR_DBCONNECT" => "Impossible de se connecter à la base de données.",
	"ERROR_DBCONNECT_2" => "Impossible de se connecter à la base de données: <br />%s.<br />Merci de vérifier votre configuration.",
	"ERROR_DBCONNECT_3" => "Erreur de connection",

	"ERROR_FLUSHING_TEMP_TABLE" => "Erreur lors du nettoyage de la table temp (%s)",
	"ERROR_SAVING_SETTINGS" => "Erreur lors de l'enregistrement des réglages: %s",
	"ERROR_DELETING_NEWSLETTER" => "Erreur lors de la suppression de cette lettre d'info",
	"ERROR_CHOOSE_ANOTHER_NEWSLETTER" => "Merci de choisir une autre newsletter, ou <a href=\"index.php?page=home&action=create\">d'en créer une nouvelle</a>",
	"ERROR_NO_NEWSLETTER_CREATE_ONE" => "Merci de <a href=\"index.php?page=newsletterconf&action=create\">créer une nouvelle newsletter</a>",

	"ERROR_NO_SUCH_NEWSLETTER" => "Newsletter introuvable",
	"ERROR_ADDING_SUBSCRIBER" => "Erreur lors de l'ajout de %s",
	"ERROR_ALREADY_SUBSCRIBER" => "%s est déjà abonné",
	"ERROR_SUPPLY_VALID_EMAIL" => "Merci de rentrer une adresse électronique valide",
	"ERROR_DELETING_SUBSCRIBER" => "Erreur lors de la suppression de l'adresse: %s",
	"ERROR_NO_EMAIL_IN_FILE"=>"Aucune adresse électronique dans ce fichier",
	"ERROR_IMPORT_FILE_MISSING" => "Merci de fournir un fichier à importer",
	"ERROR_IMPORT_TMPDIR_NOT_WRITABLE" => "Ecriture impossible dans admin/import !",

	"ERROR_DELETING_TEMP" => "Erreur lors de la suppression de l'adresse: %s",
	"ERROR_UNABLE_TO_SEND" => "Aucun abonné, impossible de rédiger un nouveau message",
	"ERROR_ALL_FIELDS_REQUIRED" => "Tous les champs sont requis",
	"ERROR_SENDING" => "Erreur lors de l'expédition du message",
	"ERROR_DELETING_ARCHIVE" => "Erreur lors de la suppression de cette archive",
	"ERROR_UNKNOWN" => "Erreur inconnue",
	"ERROR_SENDING_CONFIRM_MAIL" => "Erreur lors de l'expedition du message de confirmation",
	"ERROR_LOG_CREATE" => "Impossible de créer le fichier de log.<br/>Vérifiez les permissions du répertoire admin/logs",

	
	//MSG
	"NO_SUBSCRIBER" => "Aucun abonné dans la base de données",
	"NO_ARCHIVE" => "Aucune archive pour cette newsletter",
	"NEWSLETTER_NOT_YET" => "Aucune newsletter n'est configurée.",
	"BACK" => "Retour",
	"EXAMPLE" => "Exemple",
	"DONE" => "Fait",


	//INSTALL
	"INSTALL_TITLE" => "Installation de phpMyNewsletter",
	"INSTALL_LANGUAGE" => "Langue",
	"INSTALL_LANGUAGE_LABEL" => "Choisisser votre langue",
	"INSTALL_DB_TYPE" => "Type de base de données",
	"INSTALL_DB_TITLE" => "Base de données",
	"INSTALL_DB_HOSTNAME" => "Nom d'hôte",
	"INSTALL_DB_NAME" => "Nom de la base de données",
	"INSTALL_DB_LOGIN"=> "Nom d'utilisateur",
	"INSTALL_DB_PASS" => "Mot de passe",
	"INSTALL_DB_TABLE_PREFIX" => "Prefixe des tables",
	"INSTALL_DB_CREATE_DB" => "Créer la base de données ?",
	"INSTALL_DB_CREATE_TABLES" => "Créer les tables ?",
	"INSTALL_GENERAL_SETTINGS" => "Réglages communs",
	"INSTALL_ADMIN_PASS" => "Mot de passe d'accès à la zone d'administration",
	"INSTALL_ADMIN_BASEURL"=> "URL de base",
	"INSTALL_ADMIN_PATH_TO_PMNL" => "Chemin vers phpMyNewsletter",
	"INSTALL_ADMIN_NAME" => "Nom de l'expéditeur par défaut",
	"INSTALL_ADMIN_EMAIL" => "Adresse électronique par défaut de l'expéditeur",

	"INSTALL_MESSAGE_SENDING_TITLE" => "Gestion des envois",
	"INSTALL_MESSAGE_SENDING_LOOP" => "%s message(s) expédié(s) à chaque boucle d'envoi",
	"INSTALL_VALIDATION_PERIOD" => "Les abonnés ont %s jours pour confirmer leur abonnement.",
	"INSTALL_SENDING_METHOD" => "Méthode d'expédition",
	"INSTALL_PHP_MAIL_FONCTION" => "fonction mail() PHP (defaut)",

	"INSTALL_SMTP_HOST" => "Nom d'hôte SMTP",
	"INSTALL_SMTP_PORT" => "Port",
	"INSTALL_SMTP_AUTH_NEEDED" => "Authentification SMTP requise ?",
	"INSTALL_SMTP_USERNAME" => "Nom d'utilisateur SMTP",
	"INSTALL_SMTP_PASSWORD" => "Mot de passe SMTP",

	"INSTALL_SUBSCRIPTION_TITLE" => "Abonnement / Désabonnement",
	"INSTALL_SUB_CONFIRM" => "Les abonnés doivent confirmer leur inscription ?",
	"INSTALL_UNSUB_CONFIRM"=>"Les abonnés doivent confirmer leur désinscription ?",

	"INSTALL_SAVE_CREATE_DB" => "Création de la base de données %s ",
	"INSTALL_SAVE_CREATE_TABLE" => "Création de la table %s",
	"INSTALL_SAVE_CONFIG" => "Sauvegarde de la configuration",
	"INSTALL_SAVE_CONFIG_FILE" => "Ecriture du fichier de configuration",
	"INSTALL_UNABLE_TO_SAVE_CONFIG_FILE" => "Impossible d'écrire le fichier de configuration.",
	"INSTALL_CONFIG_MANUALLY" => "Merci de copier les lignes ci-dessous et de les coller dans le fichier de configuration (<em>include/config.php</em>).",
	"INSTALL_FINISHED" => "Terminer",

	
	//LOGOUT
	"LOGOUT_DONE" => "Vous êtes déconnecté",
	"LOGOUT_ERROR"=> "Erreur lors de la déconnection",
	"LOGOUT_TITLE" => "Déconnection",
	"LOGOUT_BACK" => "Retour",


	//ABONNEMENTS
	"SUBSCRIPTION_TITLE" => "Abonnement à la newsletter",
	"SUBSCRIPTION_SEND_CONFIRM_MESSAGE" => "Message de confirmation envoyé.",
	"SUBSCRIPTION_ALREADY_SUBSCRIBER" => "Vous êtes déjà abonné à cette lettre d'info.",
	"SUBSCRIPTION_CONFIRMATION" => "Confirmer votre inscription",
	"SUBSCRIPTION_FINISHED" => "Abonnement effectué",

	"SUBSCRIPTION_MAIL_BODY" => "Rendez-vous à l'adresse suivante pour confirmer votre abonnement",
	"SUBSCRIPTION_UNSUBSCRIBE_LINK" => "Cliquez sur le lien suivant pour vous désabonner",

	"SUBSCRIPTION_UNKNOWN_EMAIL_ADDRESS" => "Erreur: Adresse électronique inconnue",

	"UNSUBSCRIPTION_TITLE" => "Désabonnement à la newsletter",	
	"UNSUBSCRIPTION_MAIL_BODY" => "Pour vous désinscrire, cliquez sur le lien suivant",
	"UNSUBSCRIPTION_SEND_CONFIRM_MESSAGE" => "Message de confirmation envoyé.",
	"UNSUBSCRIPTION_CONFIRMATION" => "Confirmer votre désabonnement",

	"UNSUBSCRIPTION_FINISHED" => "Désabonnement terminé",

	"NEWSLETTER_TITLE" => "Newsletter",
	"UNSUBSCRIPTION_UNKNOWN_EMAIL_ADDRESS" => "Erreur: adresse électronique inconnue",

	"SEND_UNSUBSCRIPTION_LINK" => "\r\n\r\nPour vous désinscrire :\r\n",

	"PASSWORD_MD5_NOTICE" => "Le format de stockage du mot de passe d'administration a changé, merci de rentrer votre mot de passe d'administration afin d'effectuer la mise à jour.",
	"PASSWORD_MD5_PWD" => "Mot de passe : ",
	"PASSWORD_MD5_ERR" => "Une erreur est survenue, peut-être que le mot de passe saisi est incorrect.",
	"PASSWORD_MD5_ERR2"=> "Une erreur SQL est survenue : %s.",

);

?>