<?php

namespace Tag\Service;


use Tag\Model\Tag;

interface TagServiceInterface
{

    /**
     * @return Tag[]
     */
    public function getAllTags();

    /**
     * @param int $id
     *
     * @return Tag|null
     */
    public function getTagById($id);

    public function create(Tag $tag);

    public function edit(Tag $tag);

    public function delete(Tag $tag);
}
