<?php
/**
 * User: sebastien_c
 * Date: 20/02/2017
 * Time: 12:41
 */
declare(strict_types = 1);

namespace Actor\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Actor
 * @package Actor\Model
 * @ORM\Entity(repositoryClass="Actor\Repository\ActorRepository")
 * @ORM\Table(name="actor")
 */
class Actor
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
     * @return Actor
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     *
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param  $lastName
     *
     * @return $this
     */
    public function setLastName( $lastName)
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
     * @return $this
     */
    public function setFirstName( $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }



}
