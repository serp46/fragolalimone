<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Citta;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity(repositoryClass="GelatoBundle\Repository\ProvinciaRepository")
 */
class Provincia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Citta", mappedBy="provincia")
     */
    private $citta;


    public function __construct() {
        $this->citta = new Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Provincia
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add cittum
     *
     * @param \GelatoBundle\Entity\Citta $cittum
     *
     * @return Provincia
     */
    public function addCittum(\GelatoBundle\Entity\Citta $cittum)
    {
        $this->citta[] = $cittum;

        return $this;
    }

    /**
     * Remove cittum
     *
     * @param \GelatoBundle\Entity\Citta $cittum
     */
    public function removeCittum(\GelatoBundle\Entity\Citta $cittum)
    {
        $this->citta->removeElement($cittum);
    }

    /**
     * Get citta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCitta()
    {
        return $this->citta;
    }
}
