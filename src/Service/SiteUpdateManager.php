<?php
// src/Service/SiteUpdateManager.php
namespace App\Service;

use App\Service\MessageGenerator;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SiteUpdateManager
{
  
    private $adminEmail;

    public function __construct(MessageGenerator $messageGenerator, MailerInterface $mailer, string $adminEmail)
    {
   
        $this->adminEmail = $adminEmail;
    }

    public function notifyOfSiteUpdate(): bool
    {
        $happyMessage = $this->messageGenerator->getHappyMessage();

        $email = (new Email())
        ->to($this->adminEmail);


        return true;
    }
}