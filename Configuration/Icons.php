<?php
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'subscribe_icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:feuser_newsletter_subscription/Resources/Public/Icons/feuser-newsletter-subscription-subscribe.svg'
    ],
    'unsubscribe_icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:feuser_newsletter_subscription/Resources/Public/Icons/feuser-newsletter-subscription-unsubscribe.svg'
    ]
];