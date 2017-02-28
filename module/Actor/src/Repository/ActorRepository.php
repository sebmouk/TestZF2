<?php

declare(strict_types = 1);


namespace Actor\Repository;


use Doctrine\ORM\EntityRepository;

class ActorRepository extends EntityRepository
{
    /**
     * @param int $id
     *
     * @return Actor|null
     */
    public function findOneById(int $id)
    {
        $qb = $this->createQueryBuilder('a')
                   ->andWhere('a.id = :id')
                   ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @return Actor[]
     */
    public function getAllActors()
    {
        $qb = $this->createQueryBuilder('a')
                   ->addOrderBy('a.lastName', 'ASC');

        return $qb->getQuery()->getResult();
    }
}
