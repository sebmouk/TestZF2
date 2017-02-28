<?php
/**
 * User: sebastien_c
 * Date: 20/02/2017
 * Time: 12:41
 */
declare(strict_types = 1);

namespace Tag\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Tag
 * @package Tag\Model
 * @ORM\Entity(repositoryClass="Tag\Repository\TagRepository")
 * @ORM\Table(name="tag")
 */
class Tag
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
     * @ORM\Column(type="string", length=50, name="label")
     */
    private $label;

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
     * @return $this
     */
    public function setId(mixed $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param  $label
     *
     * @return $this
     */
    public function setLabel( $label)
    {
        $this->label = $label;

        return $this;
    }


}
