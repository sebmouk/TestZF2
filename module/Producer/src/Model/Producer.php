<?php
/**
 * User: sebastien_c
 * Date: 20/02/2017
 * Time: 12:41
 */
declare(strict_types = 1);

namespace Producer\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Producer
 * @package Producer\Model
 * @ORM\Entity(repositoryClass="Producer\Repository\ProducerRepository")
 * @ORM\Table(name="producer")
 */
class Producer
{
    /**
     * @var
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string", length=50, name="last_name")
     */
    private $lastName;

    /**
     * @var
     * @ORM\Column(type="string", length=50, name="first_name")
     */
    private $firstName;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Producer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param  $lastName
     *
     * @return Producer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param  $firstName
     *
     * @return Producer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }


}
