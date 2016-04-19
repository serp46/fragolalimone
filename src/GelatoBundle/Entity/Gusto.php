<?php

namespace GelatoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Gelateria;
use GelatoBundle\Entity\Ricerca;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gusto
 *
 * @ORM\Table(name="gusto")
 * @ORM\Entity(repositoryClass="GelatoBundle\Repository\GustoRepository")
 */
class Gusto
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
     * @Assert\NotBlank()
     */
    private $name;

    /**
    *
    *@ORM\ManyToMany(targetEntity="Gelateria", inversedBy="gusti")
    *@ORM\JoinTable(name="lista_gusti")
    */
    private $gelaterie;

    /**
    *
    *@ORM\ManyToOne(targetEntity="Ricerca", inversedBy="gusti")
    *@ORM\JoinColumn(name="ricerche_id", referencedColumnName="id")
    */
    private $ricerche;



    public function __construct() {
        $this->$gelateria = new ArrayCollection;
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
     * @return Gusto
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
     * Add gelaterie
     *
     * @param \GelatoBundle\Entity\Gelateria $gelaterie
     *
     * @return Gusto
     */
    public function addGelaterie(\GelatoBundle\Entity\Gelateria $gelaterie)
    {
        $this->gelaterie[] = $gelaterie;

        return $this;
    }

    /**
     * Remove gelaterie
     *
     * @param \GelatoBundle\Entity\Gelateria $gelaterie
     */
    public function removeGelaterie(\GelatoBundle\Entity\Gelateria $gelaterie)
    {
        $this->gelaterie->removeElement($gelaterie);
    }

    /**
     * Get gelaterie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGelaterie()
    {
        return $this->gelaterie;
    }

    /**
     * Set ricerche
     *
     * @param \GelatoBundle\Entity\Ricerca $ricerche
     *
     * @return Gusto
     */
    public function setRicerche(\GelatoBundle\Entity\Ricerca $ricerche = null)
    {
        $this->ricerche = $ricerche;

        return $this;
    }

    /**
     * Get ricerche
     *
     * @return \GelatoBundle\Entity\Ricerca
     */
    public function getRicerche()
    {
        return $this->ricerche;
    }
}
