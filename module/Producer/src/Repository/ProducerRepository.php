<?php

declare(strict_types = 1);


namespace Producer\Repository;


use Doctrine\ORM\EntityRepository;
use Producer\Model\Producer;

class ProducerRepository extends EntityRepository
{

    /**
     * @param int $id
     *
     * @return Producer|null
     */
    public function findOneById(int $id)
    {
        $qb = $this->createQueryBuilder('a')
                   ->andWhere('a.id = :id')
                   ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @return Producer[]
     */
    public function getAllProducers()
    {
        $qb = $this->createQueryBuilder('a')
                   ->addOrderBy('a.lastName', 'ASC');

        return $qb->getQuery()->getResult();
    }
}
