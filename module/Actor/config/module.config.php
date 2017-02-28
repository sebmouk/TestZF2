<?php

namespace Actor;

use Actor\Factory\ActorControllerFactory;
use Actor\Factory\ActorServiceFactory;
use Actor\Service\ActorService;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\Router\Http\Segment;

return [
    'doctrine' => [
        'driver' => [
            'actor_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Actor/src/Model',
                ],
            ],
            'orm_default'  => [
                'drivers' => [
                    'Actor\Model' => 'actor_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'actors' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/actor[/:action]',
                    'defaults' => [
                        'controller' => Controller\ActorController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\ActorController::class => ActorControllerFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            ActorService::class             => ActorServiceFactory::class,
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
