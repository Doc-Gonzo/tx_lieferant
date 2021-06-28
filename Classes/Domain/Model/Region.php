<?php

namespace Plan2Net\Lieferant\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Region extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title = '';



    public function __construct()
    {
    }

    /**
     * @param string $title title
     */

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
