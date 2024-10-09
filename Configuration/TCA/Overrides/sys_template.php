<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'feuser_newsletter_subscription',
    'Configuration/TypoScript',
    'tx-mail-Newsletter Subscription'
);