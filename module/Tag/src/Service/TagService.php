<?php

declare(strict_types = 1);


namespace Tag\Service;


use Tag\Model\Tag;
use Tag\Repository\TagRepository;
use Doctrine\ORM\EntityManager;
use Tag\Service\TagServiceInterface;

class TagService implements TagServiceInterface
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var TagRepository
     */
    private $tagRepository;

    /**
     * TagService constructor.
     *
     * @param EntityManager   $entityManager
     * @param TagRepository $tagRepository
     */
    public function __construct(EntityManager $entityManager, TagRepository $tagRepository)
    {
        $this->entityManager   = $entityManager;
        $this->tagRepository = $tagRepository;
    }

    /**
     * @return Tag[]
     */
    public function getAllTags()
    {
        return $this->tagRepository->findAll();
    }

    public function create(Tag $tag)
    {
        $this->entityManager->persist($tag);
        $this->entityManager->flush($tag);

        return $tag;
    }

    public function edit(Tag $tag)
    {
        $this->entityManager->flush($tag);

        return $tag;
    }

    public function delete(Tag $tag)
    {
        try {
            $this->entityManager->remove($tag);
            $this->entityManager->flush($tag);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     *
     * @return Tag|null
     */
    public function getTagById($id)
    {
        return $this->tagRepository->findOneBy($id);
    }
}
