<?php


declare(strict_types = 1);


namespace Actor\Factory;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Actor\Controller\ActorController;
use Actor\Service\ActorService;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class ActorControllerFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     *
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ActorService $actorService */
        $actorService = $container->get(ActorService::class);

        return new ActorController($actorService);
    }
}
