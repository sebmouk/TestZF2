<?php

namespace Movie;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'doctrine' => [
        'driver' => [
            'movie_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Movie/src/Model',
                ],
            ],
            'orm_default'  => [
                'drivers' => [
                    'Movie\Model' => 'movie_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'movie' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/movies[/:action]',
                    'defaults' => [
                        'controller' => Controller\MovieController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\MovieController::class => InvokableFactory::class,
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
