<?php

declare(strict_types = 1);


namespace Actor\Service;


use Actor\Model\Actor;
use Actor\Repository\ActorRepository;
use Doctrine\ORM\EntityManager;

class ActorService implements ActorServiceInterface
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var ActorRepository
     */
    private $actorRepository;

    /**
     * TagService constructor.
     *
     * @param EntityManager   $entityManager
     * @param ActorRepository $actorRepository
     */
    public function __construct(EntityManager $entityManager, ActorRepository $actorRepository)
    {
        $this->entityManager   = $entityManager;
        $this->actorRepository = $actorRepository;
    }

    /**
     * @return Actor[]
     */
    public function getAllActors()
    {
        return $this->actorRepository->findAll();
    }

    public function create(Actor $actor)
    {
        $this->entityManager->persist($actor);
        $this->entityManager->flush($actor);

        return $actor;
    }

    public function edit(Actor $actor)
    {
        $this->entityManager->flush($actor);

        return $actor;
    }

    public function delete(Actor $actor)
    {
        try {
            $this->entityManager->remove($actor);
            $this->entityManager->flush($actor);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     *
     * @return Actor|null
     */
    public function getActorById($id)
    {
        return $this->actorRepository->findOneBy($id);
    }
}
