<?php

namespace Downloads\Controller;

use Downloads\Model\ReleaseModel;
use Zend\Mvc\Controller\AbstractActionController;

class DownloadsController extends AbstractActionController
{
    protected $releases;

    /**
     * Set the release model instance
     * 
     * @param  ReleaseModel $model 
     */
    public function setReleasesModel(ReleaseModel $model)
    {
        $this->releases = $model;
    }

    /**
     * downloads landing page
     */
    public function indexAction()
    {
    }

    /**
     * latest releases landing page
     */
    public function latestAction()
    {
        return array(
            'releases' => $this->releases,
        );
    }

    /**
     * archived releases landing page
     */
    public function archivesAction()
    {
        return array(
            'releases' => $this->releases,
        );
    }

    public function skeletonAppAction()
    {
    }

    public function phpcloudAction()
    {
    }

    public function pyrusAction()
    {
    }

    public function composerAction()
    {
    }

    public function zfVersionAction()
    {
        $version  = $this->releases->getCurrentStableVersion();
        $response = $this->getResponse();
        $response->setContent($version);
        return $response;
    }
}
