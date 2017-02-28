<?php
/**
 * User: sebastien_c
 * Date: 20/02/2017
 * Time: 12:41
 */
declare(strict_types = 1);

namespace Movie\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Movie
 * @package Movie\Model
 * @ORM\Entity(repositoryClass="Producer\Repository\MovieRepository")
 * @ORM\Table(name="movie")
 */
class Movie
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
     * @ORM\Column(type="string", length=50, name="title")
     */
    private $title;

    /**
     * @var
     * @ORM\Column(type="text", name="synopsis")
     */
    private $synopsis;

    /**
     * @var
     * @ORM\Column(type="date", name="date_launch")
     */
    private $dateLaunch;

    /**
     * @var
     * @ORM\Column(type="decimal",  name="rating")
     */
    private $rating;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="Tag\Model\Tag")
     */
    private $tags;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="Actor\Model\Actor")
     */
    private $actors;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="Producer\Model\Producer")
     */
    private $producers;

    /**
     * @return
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  $id
     *
     * @return $this
     */
    public function setId( $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param  $title
     *
     * @return $this
     */
    public function setTitle( $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * @param  $synopsis
     *
     * @return $this
     */
    public function setSynopsis( $synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateLaunch()
    {
        return $this->dateLaunch;
    }

    /**
     * @param  $dateLaunch
     *
     * @return $this
     */
    public function setDateLaunch( $dateLaunch)
    {
        $this->dateLaunch = $dateLaunch;

        return $this;
    }

    /**
     * @return
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param  $rating
     *
     * @return $this
     */
    public function setRating( $rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param  $tags
     *
     * @return $this
     */
    public function setTags( $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param  $actors
     *
     * @return $this
     */
    public function setActors( $actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * @return
     */
    public function getProducers()
    {
        return $this->producers;
    }

    /**
     * @param  $producers
     *
     * @return $this
     */
    public function setProducers( $producers)
    {
        $this->producers = $producers;

        return $this;
    }



}
