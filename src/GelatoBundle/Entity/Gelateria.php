<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Gusto;
use GelatoBundle\Entity\Citta;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Gelateria
 *
 * @ORM\Table(name="gelateria")
 * @ORM\Entity(repositoryClass="GelatoBundle\Repository\GelateriaRepository")
 */
class Gelateria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="city", type="integer")
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true, unique=true)
     */
    private $phone;

    /**
     * @var bool
     *
     * @ORM\Column(name="monday", type="boolean", nullable=true)
     */
    private $monday;

    /**
     * @var bool
     *
     * @ORM\Column(name="tuesday", type="boolean", nullable=true)
     */
    private $tuesday;

    /**
     * @var bool
     *
     * @ORM\Column(name="wednesday", type="boolean", nullable=true)
     */
    private $wednesday;

    /**
     * @var bool
     *
     * @ORM\Column(name="thursday", type="boolean", nullable=true)
     */
    private $thursday;

    /**
     * @var bool
     *
     * @ORM\Column(name="friday", type="boolean", nullable=true)
     */
    private $friday;

    /**
     * @var bool
     *
     * @ORM\Column(name="saturday", type="boolean", nullable=true)
     */
    private $saturday;

    /**
     * @var bool
     *
     * @ORM\Column(name="sunday", type="boolean", nullable=true)
     */
    private $sunday;

    /**
    *
    *@ORM\ManyToMany(targetEntity="Gusto", mappedBy="gelaterie")
    */
    private $gusti;

    /**
    *
    *@ORM\ManyToOne(targetEntity="Citta", inversedBy="gelaterie")
    *@ORM\JoinColumn(name="citta_id", referencedColumnName="id")
    */
    private $citta;





    public function __construct() {
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
     * Set name
     *
     * @param string $name
     *
     * @return Gelateria
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
     * Set city
     *
     * @param integer $city
     *
     * @return Gelateria
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Gelateria
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Gelateria
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set monday
     *
     * @param boolean $monday
     *
     * @return Gelateria
     */
    public function setMonday($monday)
    {
        $this->monday = $monday;

        return $this;
    }

    /**
     * Get monday
     *
     * @return bool
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Set tuesday
     *
     * @param boolean $tuesday
     *
     * @return Gelateria
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    /**
     * Get tuesday
     *
     * @return bool
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Set wednesday
     *
     * @param boolean $wednesday
     *
     * @return Gelateria
     */
    public function setWednesday($wednesday)
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    /**
     * Get wednesday
     *
     * @return bool
     */
    public function getwednesday()
    {
        return $this->wednesday;
    }

    /**
     * Set thursday
     *
     * @param boolean $thursday
     *
     * @return Gelateria
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;

        return $this;
    }

    /**
     * Get thursday
     *
     * @return bool
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Set friday
     *
     * @param boolean $friday
     *
     * @return Gelateria
     */
    public function setFriday($friday)
    {
        $this->friday = $friday;

        return $this;
    }

    /**
     * Get friday
     *
     * @return bool
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * Set saturday
     *
     * @param boolean $saturday
     *
     * @return Gelateria
     */
    public function setSaturday($saturday)
    {
        $this->saturday = $saturday;

        return $this;
    }

    /**
     * Get saturday
     *
     * @return bool
     */
    public function getSaturday()
    {
        return $this->saturday;
    }

    /**
     * Set sunday
     *
     * @param boolean $sunday
     *
     * @return Gelateria
     */
    public function setSunday($sunday)
    {
        $this->sunday = $sunday;

        return $this;
    }

    /**
     * Get sunday
     *
     * @return bool
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    /**
     * Add gusti
     *
     * @param \GelatoBundle\Entity\Gusto $gusti
     *
     * @return Gelateria
     */
    public function addGusti(\GelatoBundle\Entity\Gusto $gusti)
    {
        $this->gusti[] = $gusti;

        return $this;
    }

    /**
     * Set gusti
     *
     * @param integer $gusti
     *
     * @return Gelateria
     */
    public function setGusti($gusti)
    {
        $this->gusti = $gusti;

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

    /**
     * Set citta
     *
     * @param \GelatoBundle\Entity\Citta $citta
     *
     * @return Gelateria
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
}
