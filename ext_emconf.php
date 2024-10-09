<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'feuser_newsletter_subscription',
    'description' => '(Un-)subscribe-form to tx_mail_newsletter in fe_users',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pschoene\\FeuserNewsletterSubscription\\' => 'Classes/',
        ],
    ],
];
