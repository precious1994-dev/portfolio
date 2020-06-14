<?php

namespace App\Entity;

use App\Repository\RealisationRepository;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Personne;

/**
 * @ORM\Entity(repositoryClass=RealisationRepository::class)
 */
class Realisation
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * id de la personne
     * @var [type]
     * @ORM\ManyToOne(targetEntity="App\Entity\Personne")
     * @ORM\JoinColumn(name="idPersonne", referencedColumnName="id")
     */
    private $idPersonne;


    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $titre;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="piece_jointe", type="string", length=255, nullable=true)
     */
    private $pieceJointe;



    public function getId()
    {
        return $this->id;
    }


    /**
     * Get idPersonne
     *
     * @return App\Entity\Personne
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

     /**
     * Set idPersonne
     *
     * @param App\Entity\Personne $idPersonne
     *
     * @return Realisation
     */
    public function setIdPersonne(Personne $idPersonne = null)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }


    /**
     * get titre de Realisation
     * @return titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set titre de Realisation
     * @param string titre
     * @return Realisation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

     /**
     * get description de Realisation
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description de Realisation
     * @param string description
     * @return Realisation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * get pieceJointe de Realisation
     * @return string pieceJointe
     */
    public function getPieceJointe()
    {
        return $this->pieceJointe;
    }

    /**
     * Set pieceJointe de Realisation
     * @param string pieceJointe
     * @return Realisation
     */
    public function setPieceJointe($pieceJointe)
    {
        $this->pieceJointe = $pieceJointe;

        return $this;
    }


}
