<?php

namespace Plan2Net\Lieferant\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Course extends AbstractEntity
{

    /**
     * @var int
     */
    protected $sysLanguageUid;

    /**
     * @var int
     */
    protected $l10nParent;

    /**
     * @var \DateTime
     */
    protected $starttime;

    /**
     * @var \DateTime
     */
    protected $endtime;

    /**
     * keep it as string as it should be only used during imports
     *
     * @var string
     */
    protected $feGroup;

    /** @var string */
    protected $slug = '';

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Plan2Net\Lieferant\Domain\Model\Region>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $region;


    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = '';



    public function __construct()
    {

        $this->image = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

 

    /**
     * Get Region
     *
     * @return \plan2Net\lieferant\Domain\Model\Region[]
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set Region
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }


    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
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

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    /**
     * Set sys language
     *
     * @param int $sysLanguageUid
     */
    public function setSysLanguageUid($sysLanguageUid)
    {
        $this->_languageUid = $sysLanguageUid;
    }

    /**
     * Get sys language
     *
     * @return int
     */
    public function getSysLanguageUid()
    {
        return $this->_languageUid;
    }

    /**
     * Set l10n parent
     *
     * @param int $l10nParent
     */
    public function setL10nParent($l10nParent)
    {
        $this->l10nParent = $l10nParent;
    }

    /**
     * Get l10n parent
     *
     * @return int
     */
    public function getL10nParent()
    {
        return $this->l10nParent;
    }


}
