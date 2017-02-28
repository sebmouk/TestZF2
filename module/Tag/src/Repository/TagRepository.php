<?php

declare(strict_types = 1);


namespace Tag\Repository;


use Doctrine\ORM\EntityRepository;
use Tag\Model\Tag;

class TagRepository extends EntityRepository
{

    /**
     * @param int $id
     *
     * @return Tag|null
     */
    public function findOneById(int $id)
    {
        $qb = $this->createQueryBuilder('a')
                   ->andWhere('a.id = :id')
                   ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @return Tag[]
     */
    public function getAllTags()
    {
        $qb = $this->createQueryBuilder('a')
                   ->addOrderBy('a.title', 'ASC');

        return $qb->getQuery()->getResult();
    }
}
