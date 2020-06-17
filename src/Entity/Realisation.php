<?php

namespace App\Entity;

use App\Repository\RealisationRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

use App\Entity\Personne;

/**
 * @ORM\Entity(repositoryClass=RealisationRepository::class)
 * @Vich\Uploadable()
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
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     *  @var File|null
     * @Vich\UploadableField(mapping="realisation_image", fileNameProperty="filename")
     *
     */
    private $imageFile;

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
     * @ORM\Column(type="datetime")
     */
    private $update_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;


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
     * get image de Realisation
     * @return string image
     */
    public function getimage()
    {
        return $this->image;
    }

    /**
     * Set image de Realisation
     * @param string image
     * @return Realisation
     */
    public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     * @return Realisation
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        $this->imageFile = $imageFile;
        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();

        }
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     * @return Realisation
     */
    public function setFilename(?string $filename): Realisation
    {
        $this->filename = $filename;

        if($filename){
            $this->update_at = new \DateTime();
        }

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }


}
