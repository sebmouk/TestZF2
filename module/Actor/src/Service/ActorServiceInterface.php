<?php

namespace Actor\Service;


use Actor\Model\Actor;

interface ActorServiceInterface
{

    /**
     * @return Actor[]
     */
    public function getAllActors();

    /**
     * @param int $id
     *
     * @return Actor|null
     */
    public function getActorById($id);

    public function create(Actor $actor);

    public function edit(Actor $actor);

    public function delete(Actor $actor);
}
