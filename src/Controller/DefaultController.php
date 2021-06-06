<?php


namespace App\Controller;


use App\Handler\MyMessageHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class DefaultController extends AbstractController
{
    public function index(MyMessageHandler $myMessageHandler) {
        return $this->json('OK');
    }
}
