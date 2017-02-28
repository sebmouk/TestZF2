<?php


namespace Producer\Controller;

use Producer\Service\ProducerServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProducerController extends AbstractActionController
{
    /**
     * @var ProducerServiceInterface
     */
    private $prodService;

    public function __construct(ProducerServiceInterface $prodService)
    {
        $this->prodService = $prodService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'producers' => $this->prodService->getAllProducers(),
            ]
        );
    }
}
