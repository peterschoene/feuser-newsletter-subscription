<?php

namespace Pschoene\FeuserNewsletterSubscription\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class UserRepository extends Repository
{
    /**
     * Find a user by email address
     *
     * @param string $email
     * @return \Pschoene\FeuserNewsletterSubscription\Domain\Model\User|null
     */
    public function findOneByEmail(string $email)
    {
        $query = $this->createQuery();
        return $query->matching($query->equals('email', $email))
            ->execute()
            ->getFirst();
    }
}
