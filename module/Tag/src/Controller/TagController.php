<?php


namespace Tag\Controller;

use Tag\Service\TagServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TagController extends AbstractActionController
{
    /**
     * @var TagServiceInterface
     */
    private $tagService;

    public function __construct(TagServiceInterface $tagService)
    {
        $this->tagService = $tagService;
    }

    public function indexAction()
    {
        return new ViewModel(
            [
                'tags' => $this->tagService->getAllTags(),
            ]
        );
    }
}
