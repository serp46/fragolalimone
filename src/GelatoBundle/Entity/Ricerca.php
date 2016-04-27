<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Citta;
use GelatoBundle\Entity\Gusto;


/**
 * Ricerca
 *
 * @ORM\Table(name="ricerca")
 * @ORM\Entity(repositoryClass="GelatoBundle\Repository\RicercaRepository")
 */
class Ricerca
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_search", type="datetimetz")
     */
    private $dateSearch;

    /**
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="ricerche")
     * @ORM\JoinColumn(name="citta_id", referencedColumnName="id")
     */
    private $citta;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ricerche")
     * @ORM\JoinColumn(name="utenti_id", referencedColumnName="id")
     */
    private $utenti;

    /**
    *
    *@ORM\ManytoOne(targetEntity="Gusto", inversedBy="ricerche")
    *@ORM\JoinCOLUMN(name="gusti_id"), referencedColumn="id")
    */
    private $gusti;

    public function __construct(){
        $this->gusti = new ArrayCollection();
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
     * Set dateSearch
     *
     * @param \DateTime $dateSearch
     *
     * @return Ricerca
     */
    public function setDateSearch($dateSearch)
    {
        $this->dateSearch = $dateSearch;

        return $this;
    }

    /**
     * Get dateSearch
     *
     * @return \DateTime
     */
    public function getDateSearch()
    {
        return $this->dateSearch;
    }

    /**
     * Set citta
     *
     * @param \GelatoBundle\Entity\Citta $citta
     *
     * @return Ricerca
     */
    public function setCitta(\GelatoBundle\Entity\Citta $citta = null)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return \GelatoBundle\Entity\Citta
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set utenti
     *
     * @param \GelatoBundle\Entity\User $utenti
     *
     * @return Ricerca
     */
    public function setUtenti(\GelatoBundle\Entity\User $utenti = null)
    {
        $this->utenti = $utenti;

        return $this;
    }

    /**
     * Get utenti
     *
     * @return \GelatoBundle\Entity\User
     */
    public function getUtenti()
    {
        return $this->utenti;
    }

    /**
     * Add gusti
     *
     * @param \GelatoBundle\Entity\Gusto $gusti
     *
     * @return Ricerca
     */
    public function addGusti(\GelatoBundle\Entity\Gusto $gusti)
    {
        $this->gusti[] = $gusti;

        return $this;
    }

    /**
     * Remove gusti
     *
     * @param \GelatoBundle\Entity\Gusto $gusti
     */
    public function removeGusti(\GelatoBundle\Entity\Gusto $gusti)
    {
        $this->gusti->removeElement($gusti);
    }

    /**
     * Get gusti
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGusti()
    {
        return $this->gusti;
    }
}
