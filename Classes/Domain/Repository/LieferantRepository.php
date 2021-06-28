<?php

namespace Plan2Net\Lieferant\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use Plan2Net\Lieferant\Domain\Repository\RegionRepository;
use TYPO3\CMS\Extbase\Annotation\Inject;
use Plan2Net\Lieferant\Domain\Repository\LanguageRepository;


class LieferantRepository extends Repository
{
    /**
     * @var \Plan2Net\Lieferant\Domain\Repository\CollegeRepository
     * @inject
     */
    protected $collegeRepository;


    public function findOneBySlug($slug)
    {
        $query = $this->createQuery();

        $query->matching($query->like('slug', $slug));
        $query->setLimit(1);

        return $query->execute();
    }
}
