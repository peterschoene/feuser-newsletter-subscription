<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$extensionKey = 'FeuserNewsletterSubscription';

// Registrierung des Subscribe-Plugins
$pluginNameSubscribe = 'Subscribe';
$pluginTitleSubscribe = 'LLL:EXT:feuser_newsletter_subscription/Resources/Private/Language/locallang_db.xlf:subscribe_plugin_title';
ExtensionUtility::registerPlugin(
    $extensionKey,
    $pluginNameSubscribe,
    $pluginTitleSubscribe
);

// Registrierung des Unsubscribe-Plugins
$pluginNameUnsubscribe = 'Unsubscribe';
$pluginTitleUnsubscribe = 'LLL:EXT:feuser_newsletter_subscription/Resources/Private/Language/locallang_db.xlf:unsubscribe_plugin_title';
ExtensionUtility::registerPlugin(
    $extensionKey,
    $pluginNameUnsubscribe,
    $pluginTitleUnsubscribe
);