<?php

declare(strict_types = 1);

use Pschoene\FeuserNewsletterSubscription\Domain\Model\User;
use Pschoene\FeuserNewsletterSubscription\Domain\Model\FrontendUserGroup;

return [
    User::class => [
        'tableName' => 'fe_users',
        'recordType' => 0
    ],
    FrontendUserGroup::class => [
        'tableName' => 'fe_groups',
        'recordType' => 0
    ]
];
