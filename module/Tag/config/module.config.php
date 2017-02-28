<?php

namespace Tag;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Tag\Factory\TagControllerFactory;
use Tag\Factory\TagServiceFactory;
use Tag\Service\TagService;
use Zend\Router\Http\Segment;

return [
    'doctrine' => [
        'driver' => [
            'tag_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Tag/src/Model',
                ],
            ],
            'orm_default'  => [
                'drivers' => [
                    'Tag\Model' => 'tag_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'tags' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/tag[/:action][/:id]',
                    'defaults' => [
                        'controller' => Controller\TagController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\TagController::class => TagControllerFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            TagService::class             => TagServiceFactory::class,
        ],
    ],
    'view_manager' => [
    /*    'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../../Application/view/layout/layout.phtml',
            'error/404'               => __DIR__ . '/../../Application/view/error/404.phtml',
            'error/index'             => __DIR__ . '/../../Application/view/error/index.phtml',
        ],
     */
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
