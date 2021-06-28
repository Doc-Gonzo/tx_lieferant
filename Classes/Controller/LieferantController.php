<?php

namespace Plan2Net\Lieferant\Controller;

use plan2Net\lieferant\Domain\Model\Lieferant;
use plan2Net\lieferant\Domain\Model\Region;
use Plan2Net\Lieferant\Domain\Repository\LieferantRepository;
use Plan2Net\Lieferant\Domain\Repository\RegionRepository;
use TYPO3\CMS\Extbase\Annotation\Inject;


use TYPO3\CMS\Core\Utility\GeneralUtility;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class LieferantController extends ActionController
{
    private $lieferantRepository;
    private $regionRepository;

    /**
     * Inject the lieferant repository
     *
     * @param \Plan2Net\Lieferant\Domain\Repository\LieferantRepository $lieferantRepository
     */
    public function injectLieferantRepository(LieferantRepository $lieferantRepository)
    {
        $this->lieferantRepository = $lieferantRepository;
    }

    /**
     * Inject the region repository
     *
     * @param \Plan2Net\Lieferant\Domain\Repository\RegionRepository $regionRepository
     */
    public function injectRegionRepository(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

        public function lieferantlistAction()
    {

        /* Find all if no parameter */

            $lieferants = $this->lieferantRepository->findAll();
            $this->view->assign('lieferants', $lieferants);

    }

    public function regionlistAction()
    {
        $regions = $this->regionRepository->findAll();
        $this->view->assign('regions', $regions);
    }

    public function lieferantdetailAction()
    {
        $lieferantUid=  NULL;
        if ($this->request->hasArgument('lieferant')) {
            $lieferantUid  = $this->request->getArgument('lieferant');
            $lieferant = $this->lieferantRepository->findByUid($lieferantUid);
        }

        else{
            $lieferantUid = 1;
            $lieferant = $this->lieferantRepository->findByUid($lieferantUid);
        }

        $this->view->assign('lieferant', $lieferant);

        $GLOBALS['TSFE']->page['title'] = "ADEG Lieferant: " . $lieferant->getTitle();
        $regions = $this->regionRepository->findAll();
        $this->view->assign('regions', $regions);
    }
}
