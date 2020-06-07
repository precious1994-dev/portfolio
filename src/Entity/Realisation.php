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
     * @ORM\Column(type="string", length=50)
     */
    private $domaine;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     * @ORM\Column(name="piece_jointe", type="string", length=255, nullable=true)
     */
    private $pieceJointe;

    /**
     * @var bool
     * @ORM\Column(name="flag", type="boolean", nullable=true)
     */
    private $flag;


    public function __construct(){

        $this->dateDebut = new \DateTime('now');
        
        //cree une erreur
        //$this->dateFin->setTimestamp(strtotime('+3 month'));

        /*
         * Flag = false => compétences
         * Flag = true => réalisations
         */
        $this->flag = false;
    }



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
     * get domaine de Realisation
     * @return domaine
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set domaine de Realisation
     * @param string $domaine
     * @return Realisation
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

     /**
     * get dateDebut de Realisation
     * @param \DateTime $dateDebut
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateDebut de Realisation
     * @return Realisation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }


     /**
     * get dateFin de Realisation
     * @return dateFin
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set titre de Realisation
     * @param \DateTime $dateFin
     * @return Realisation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

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

     /**
     * get flag de Realisation
     * @return bool flag
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set flag de Realisation
     * @param bool $flag
     * @return Realisation
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }
}
