<?php


namespace Actor\Controller;

use Actor\Service\ActorServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ActorController extends AbstractActionController
{
    /**
     * @var ActorServiceInterface
     */
    private $actorService;

    public function __construct(ActorServiceInterface $actorService)
    {
        $this->actorService = $actorService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'actors' => $this->actorService->getAllActors(),
            ]
        );
    }



}
