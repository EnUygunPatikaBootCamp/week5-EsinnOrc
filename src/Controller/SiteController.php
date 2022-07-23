<?php
// src/Controller/SiteController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\SiteUpdateManager;


class SiteController extends AbstractController
{
    public function new(SiteUpdateManager $siteUpdateManager)
    {
        // ...

        if ($siteUpdateManager->notifyOfSiteUpdate()) {
            $this->addFlash('success', 'Başarılı bir şekilde mail gönderilmiştir.');
        }

        // ...
    }
}