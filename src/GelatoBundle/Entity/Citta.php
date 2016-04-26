<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Provincia;
use GelatoBundle\Entity\Ricerca;
use GelatoBundle\Entity\User;
use GelatoBundle\Entity\Gelateria;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Citta
 *
 * @ORM\Table(name="citta")
 * @ORM\Entity(repositoryClass="GelatoBundle\Repository\CittaRepository")
 */
class Citta
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
     *
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="citta")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */
    private $province;

    /**
     *
     * @ORM\OneToMany(targetEntity="Ricerca", mappedBy="citta")
     */
    private $ricerche;

    /**
    *
    * @ORM\OneToMany(targetEntity="User", mappedBy="citta")
    */
    private $utenti;

    /**
    *
    * @ORM\OneToMany(targetEntity="Gelateria", mappedBy="citta")
    */
   private $gelaterie;
     public function __construct() {
        $this->utenti = new ArrayCollection();
        $this->ricerche = new ArrayCollection();
        $this->gelaterie = new ArrayCollection();
        $this->province = new ArrayCollection();
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
     * @return Citta
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
     * Set provincia
     *
     * @param \GelatoBundle\Entity\Provincia $provincia
     *
     * @return Citta
     */
    public function setProvincia(\GelatoBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \GelatoBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Add ricerche
     *
     * @param \GelatoBundle\Entity\Ricerca $ricerche
     *
     * @return Citta
     */
    public function addRicerche(\GelatoBundle\Entity\Ricerca $ricerche)
    {
        $this->ricerche[] = $ricerche;

        return $this;
    }

    /**
     * Remove ricerche
     *
     * @param \GelatoBundle\Entity\Ricerca $ricerche
     */
    public function removeRicerche(\GelatoBundle\Entity\Ricerca $ricerche)
    {
        $this->ricerche->removeElement($ricerche);
    }

    /**
     * Get ricerche
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRicerche()
    {
        return $this->ricerche;
    }

    /**
     * Add utenti
     *
     * @param \GelatoBundle\Entity\User $utenti
     *
     * @return Citta
     */
    public function addUtenti(\GelatoBundle\Entity\User $utenti)
    {
        $this->utenti[] = $utenti;

        return $this;
    }

    /**
     * Remove utenti
     *
     * @param \GelatoBundle\Entity\User $utenti
     */
    public function removeUtenti(\GelatoBundle\Entity\User $utenti)
    {
        $this->utenti->removeElement($utenti);
    }

    /**
     * Get utenti
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtenti()
    {
        return $this->utenti;
    }

    /**
     * Add gelaterie
     *
     * @param \GelatoBundle\Entity\Gelateria $gelaterie
     *
     * @return Citta
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

    public function __toString()
    {
        return $this->getName();
    }
}
