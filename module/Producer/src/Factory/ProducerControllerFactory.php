<?php


declare(strict_types = 1);


namespace Producer\Factory;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Producer\Controller\ProducerController;
use Producer\Service\ProducerService;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class ProducerControllerFactory implements FactoryInterface
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
        /** @var ProducerService $prodService */
        $prodService = $container->get(ProducerService::class);

        return new ProducerController($prodService);
    }
}
