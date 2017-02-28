<?php
/**
 * User: orkin
 * Date: 16/02/2017
 * Time: 15:24
 */
declare(strict_types = 1);


namespace Producer\Factory;


use Producer\Model\Producer;
use Producer\Repository\ProducerRepository;
use Producer\Service\ProducerService;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class ProducerServiceFactory implements FactoryInterface
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
        /** @var EntityManager $entityManager */
        $entityManager = $container->get(EntityManager::class);
        /** @var ProducerRepository $prodRepository */
        $prodRepository = $entityManager->getRepository(Producer::class);

        return new ProducerService($entityManager, $prodRepository);
    }
}
