<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="ciname", type="string", length=255, unique=true)
     */
    private $ciname;


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
     * Set ciname
     *
     * @param string $ciname
     *
     * @return Citta
     */
    public function setCiname($ciname)
    {
        $this->ciname = $ciname;

        return $this;
    }

    /**
     * Get ciname
     *
     * @return string
     */
    public function getCiname()
    {
        return $this->ciname;
    }
}

