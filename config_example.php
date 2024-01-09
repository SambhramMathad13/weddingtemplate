<?php

/**
 * GraphenePHP Configuration
 *
 * This file contains the configuration settings for the GraphenePHP framework.
 * It includes settings such as the application name, database connection details,
 * SMTP configuration for email, SEO settings, and more.
 *
 * @package GraphenePHP
 * @version 1.0.0
 */

$config = [
    'APP_NAME' => 'ForeverMates',
    'APP_TITLE' => 'ForeverMates - Online Invites & Guest Management',
    'APP_URL' => 'http://localhost/',
    'APP_SLUG' => 'weddingtemplate',
    'DB_CONNECTION' => 'mysql',
    'DB_HOST' => 'localhost:3309',
    'DB_PORT' => '3309',
    'DB_DATABASE' => 'eSubhalekha',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'SMTP_DRIVER' => 'smtp',
    'SMTP_HOST' => 'smtp-relay.sendinblue.com',
    'SMTP_PORT' => '587',
    'SMTP_USERNAME' => '',
    'SMTP_PASSWORD' => '',
    'SMTP_ENCRYPTION' => 'tls',
    'OPENAI_API_KEY' => '',
    'APP_DESC' => 'Personalized online invitation',
    'APP_SHORT_TITLE' => 'ForeverMates',
    'APP_AUTHOR' => 'ForeverMates',
    'APP_ICON' => 'assets/img/eSubhalekhaIcon.png',
    'APP_OG_ICON' => 'assets/img/eSubhalekhaIcon.png',
    'APP_OG_ICON_MOBILE' => 'assets/img/eSubhalekhaIcon.png',
    'APP_THEME_COLOR' => '#86363B',
    'APP_KEYWORDS' => 'ForeverMates, eSubhalekha, subhalekha, wedding, invitation, online invitation, Radhe Shyam Salopanthula',
    'APP_TWITTER_CREATOR' => '@imraadhe',
];

return $config;