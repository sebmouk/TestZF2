<?php

declare(strict_types = 1);


namespace Producer\Service;


use Producer\Model\Producer;
use Producer\Repository\ProducerRepository;
use Doctrine\ORM\EntityManager;

class ProducerService implements ProducerServiceInterface
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var ProducerRepository
     */
    private $prodRepository;

    /**
     * TagService constructor.
     *
     * @param EntityManager   $entityManager
     * @param ProducerRepository $prodRepository
     */
    public function __construct(EntityManager $entityManager, ProducerRepository $prodRepository)
    {
        $this->entityManager   = $entityManager;
        $this->prodRepository = $prodRepository;
    }

    /**
     * @return Producer[]
     */
    public function getAllProducers()
    {
        return $this->prodRepository->findAll();
    }

    public function create(Producer $prod)
    {
        $this->entityManager->persist($prod);
        $this->entityManager->flush($prod);

        return $prod;
    }

    public function edit(Producer $prod)
    {
        $this->entityManager->flush($prod);

        return $prod;
    }

    public function delete(Producer $prod)
    {
        try {
            $this->entityManager->remove($prod);
            $this->entityManager->flush($prod);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     *
     * @return Producer|null
     */
    public function getProducerById($id)
    {
        return $this->prodRepository->findOneBy($id);
    }
}
