<?php


namespace Movie\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MovieController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
