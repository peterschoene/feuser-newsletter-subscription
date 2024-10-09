<?php

declare(strict_types=1);

use Pschoene\FeuserNewsletterSubscription\Controller\NewsletterController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'FeuserNewsletterSubscription',
    'Subscribe',
    [
        // Die Formularanzeige (showSubscribe) und die Verarbeitungsaktion (subscribe)
        NewsletterController::class => 'showSubscribe, subscribe',
    ],
    [
        NewsletterController::class => 'subscribe',
    ]
);

ExtensionUtility::configurePlugin(
    'FeuserNewsletterSubscription',
    'Unsubscribe',
    [
        // Die Formularanzeige (showUnsubscribe) und die Verarbeitungsaktion (unsubscribe)
        NewsletterController::class => 'showUnsubscribe, unsubscribe',
    ],
    [
        NewsletterController::class => 'unsubscribe',
    ]
);
