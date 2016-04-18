<?php

namespace GelatoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
}

