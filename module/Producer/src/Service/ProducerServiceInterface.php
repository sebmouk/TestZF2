<?php

namespace Producer\Service;


use Producer\Model\Producer;

interface ProducerServiceInterface
{

    /**
     * @return Producer[]
     */
    public function getAllProducers();

    /**
     * @param int $id
     *
     * @return Producer|null
     */
    public function getProducerById($id);

    public function create(Producer $prod);

    public function edit(Producer $prod);

    public function delete(Producer $prod);
}
