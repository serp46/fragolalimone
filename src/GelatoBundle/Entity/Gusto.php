<?php

namespace GelatoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection();
use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Gelateria;
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



    public function __construct() {
        $this->$gelateria = new Doctrine\Common\Collections\ArrayCollection();
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
}
