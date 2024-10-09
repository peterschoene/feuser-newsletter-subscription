<?php

namespace Pschoene\FeuserNewsletterSubscription\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class User extends AbstractEntity
{
    final public const TABLE_NAME = 'fe_users';
    
    /**
     * @var string
     */
    protected $username = '';

    /**
     * @var ObjectStorage<\Pschoene\FeuserNewsletterSubscription\Domain\Model\FrontendUserGroup>
     */
    protected $usergroup;

    public function __construct()
    {
        $this->usergroup = new ObjectStorage();
    }

    /**
     * Initialisiert alle ObjectStorage-Eigenschaften, wenn das Modell aus der DB rekonstruiert wird
     */
    public function initializeObject(): void
    {
        $this->usergroup ??= new ObjectStorage();
    }

    /**
     * @var string|null
     */
    protected $email = null;

    /**
     * @var int
     */
    protected $mailActive = 0;

    /**
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @var bool
     */
    protected $mailHtml = false;

    // Getter und Setter für Benutzername
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    // Getter und Setter für E-Mail
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    // Getter und Setter für mail_active
    public function getMailActive(): int
    {
        return $this->mailActive;
    }

    public function setMailActive(int $mailActive): void
    {
        $this->mailActive = $mailActive;
    }

    // Getter und Setter für first_name
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    // Getter und Setter für last_name
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    // Getter und Setter für mail_html
    public function getMailHtml(): bool
    {
        return $this->mailHtml;
    }

    public function setMailHtml(bool $mailHtml): void
    {
        $this->mailHtml = $mailHtml;
    }

    // Getter und Setter für Benutzergruppen
    public function getUsergroup(): ObjectStorage
    {
        return $this->usergroup;
    }

    public function setUsergroup(ObjectStorage $usergroup): void
    {
        $this->usergroup = $usergroup;
    }
}
