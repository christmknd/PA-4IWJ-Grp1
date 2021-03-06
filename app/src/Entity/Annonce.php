<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Carbon\Carbon;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as assert;



/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255,
     *     )
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Choice({"Adoption","Perte"})
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFinish;

    /**
     * @ORM\Column(type="datetime")
     */
    private $atCreated;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrViews;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $nomAnimal;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $espece;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\NotBlank
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Choice({"Male","Femelle"})
     */
    private $sexe;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $age;

    /**
     * @ORM\ManyToMany(targetEntity=Evenement::class, mappedBy="annonces")
     */
    private $evenements;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="string")
     */
    private $LatLng;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;


    public function __construct()
    {
        $this->evenements = new ArrayCollection();
        $this->isFinish = false;
        $this->atCreated = Carbon::now();
        $this->nbrViews = 0;
        $this->isPublished = true;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIsFinish(): ?bool
    {
        return $this->isFinish;
    }

    public function setIsFinish(bool $isFinish): self
    {
        $this->isFinish = $isFinish;

        return $this;
    }

    public function getAtCreated(): ?\DateTimeInterface
    {
        return $this->atCreated;
    }

    public function setAtCreated(\DateTimeInterface $atCreated): self
    {
        $this->atCreated = $atCreated;

        return $this;
    }

    public function getNbrViews(): ?int
    {
        return $this->nbrViews;
    }

    public function setNbrViews(int $nbrViews): self
    {
        $this->nbrViews = $nbrViews;

        return $this;
    }

    public function getNomAnimal(): ?string
    {
        return $this->nomAnimal;
    }

    public function setNomAnimal(string $nomAnimal): self
    {
        $this->nomAnimal = $nomAnimal;

        return $this;
    }

    public function getEspece(): ?string
    {
        return $this->espece;
    }

    public function setEspece(string $espece): self
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode): void
    {
        $this->zipCode = $zipCode;
    }



    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->addAnnonce($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            $evenement->removeAnnonce($this);
        }

        return $this;
    }

    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?User $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function isFavori(User $user): ?bool
    {
        return $user->getAnnoncesFavoris()->contains($this);
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getLatLng()
    {
        return $this->LatLng;
    }

    /**
     * @param mixed $LatLng
     */
    public function setLatLng($LatLng): void
    {
        $this->LatLng = $LatLng;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }


}
