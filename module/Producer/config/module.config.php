<?php

namespace Producer;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Producer\Factory\ProducerControllerFactory;
use Producer\Factory\ProducerServiceFactory;
use Producer\Service\ProducerService;
use Zend\Router\Http\Segment;

return [
    'doctrine' => [
        'driver' => [
            'producer_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'module/Producer/src/Model',
                ],
            ],
            'orm_default'  => [
                'drivers' => [
                    'Producer\Model' => 'producer_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'producers' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/prod[/:action]',
                    'defaults' => [
                        'controller' => Controller\ProducerController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\ProducerController::class => ProducerControllerFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            ProducerService::class             => ProducerServiceFactory::class,
        ],
    ],
    'view_manager' => [
        /*
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            //'layout/layout'           => __DIR__ . '/../../Application/view/layout/layout.phtml',
            'error/404'               => __DIR__ . '/../../Application/view/error/404.phtml',
            'error/index'             => __DIR__ . '/../../Application/view/error/index.phtml',
        ],*/
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
