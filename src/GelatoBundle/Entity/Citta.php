<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GelatoBundle\Entity\Provincia;

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
    private $provincia;



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
}
