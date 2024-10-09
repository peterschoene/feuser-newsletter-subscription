<?php

declare(strict_types=1);

namespace Pschoene\FeuserNewsletterSubscription\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * A Frontend User Group
 */
class FrontendUserGroup extends AbstractEntity
{
    protected string $title = '';

    protected string $description = '';

    /**
     * @var ?ObjectStorage<FrontendUserGroup>
     */
    protected ?ObjectStorage $subgroup = null;

    /**
     * Constructs a new Frontend User Group
     */
    public function __construct(string $title = '')
    {
        $this->setTitle($title);
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     */
    public function initializeObject(): void
    {
        $this->subgroup ??= new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Sets the subgroups. Keep in mind that the property is called "subgroup"
     * although it can hold several subgroups.
     *
     * @param ObjectStorage<FrontendUserGroup> $subgroup
     */
    public function setSubgroup(ObjectStorage $subgroup): void
    {
        $this->subgroup = $subgroup;
    }

    /**
     * Adds a subgroup to the frontend user
     */
    public function addSubgroup(FrontendUserGroup $subgroup): void
    {
        $this->subgroup?->attach($subgroup);
    }

    /**
     * Removes a subgroup from the frontend user group
     */
    public function removeSubgroup(FrontendUserGroup $subgroup): void
    {
        $this->subgroup?->detach($subgroup);
    }

    /**
     * Returns the subgroups. Keep in mind that the property is called "subgroup"
     * although it can hold several subgroups.
     *
     * @return ?ObjectStorage<FrontendUserGroup>
     */
    public function getSubgroup(): ?ObjectStorage
    {
        return $this->subgroup;
    }
}