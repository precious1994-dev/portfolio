<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;


    public function __construct(){
        $this->dateCreation = new \DateTime('now');
    }

    /**
     * Generates the magic method
     * 
     */
    public function __toString(){
        // to show the name of the Personne in the select
        return $this->nom." ".$this->prenom;
        // to show the id of the Personne in the select
        // return $this->id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * get nom de personne
     * @return nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom de personne
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * get prenom de personne
     * @return prenom de la personne
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prenom de personne
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * get description de personne
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description de personne
     * @return Personne
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * get email de personne
     * @return email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email de personne
     * @return Personne
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

     /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Personne
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
