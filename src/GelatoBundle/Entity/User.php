<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use GelatoBundle\Entity\Ricerca;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GelatoBundle\Repository\UserRepository")
 */
class User extends BaseUser
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
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean")
     */
    private $isAdmin;

    /**
     * @var int
     *
     * @ORM\Column(name="default_city", type="integer", nullable=true)
     */
    private $defaultCity;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Citta", inversedBy="utenti")
     * @ORM\JoinColumn(name="citta_id", referencedColumnName="id")
     */
    private $citta;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="Ricerca")
     * @ORM\JoinColumn(name="utente_id", referencedColumnName="id")
     */
    private $ricerca;

    /**
     *
     * @ORM\OneToMany(targetEntity="Ricerca", mappedBy="utenti")
     */
    private $utenti;

    public function __construct() {
         parent::__construct();
         $this->ricerche = new ArrayCollection();
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
     * @return User
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
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return User
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set defaultCity
     *
     * @param integer $defaultCity
     *
     * @return User
     */
    public function setDefaultCity($defaultCity)
    {
        $this->defaultCity = $defaultCity;

        return $this;
    }

    /**
     * Get defaultCity
     *
     * @return int
     */
    public function getDefaultCity()
    {
        return $this->defaultCity;
    }

    /**
     * Set citta
     *
     * @param \GelatoBundle\Entity\Citta $citta
     *
     * @return User
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
     * Add utenti
     *
     * @param \GelatoBundle\Entity\Ricerca $utenti
     *
     * @return User
     */
    public function addUtenti(\GelatoBundle\Entity\Ricerca $utenti)
    {
        $this->utenti[] = $utenti;

        return $this;
    }

    /**
     * Remove utenti
     *
     * @param \GelatoBundle\Entity\Ricerca $utenti
     */
    public function removeUtenti(\GelatoBundle\Entity\Ricerca $utenti)
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
}
