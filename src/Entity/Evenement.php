<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Carbon\Carbon;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
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
     *     max = 255
     *     )
     */
    private $titre;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThan("today +1 day")
     */
    private $dateEvent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $atCreated;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=100)
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
     * @assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFinish;

    /**
     * @ORM\ManyToMany(targetEntity=Annonce::class, inversedBy="evenements")
     */
    private $annonces;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrViews;

    /**
     * @ORM\Column(type="string")
     */
    private $LatLng;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="list_event_registered")
     *
     */
    private $list_user_registered;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;


    public function __construct()
    {
        $this->annonces = new ArrayCollection();
        $this->atCreated = Carbon::now();
        $this->isFinish = false;
        $this->nbrViews = 0;
        $this->list_user_registered = new ArrayCollection();
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

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;

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

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        $this->annonces->removeElement($annonce);

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
        return $user->getEvenementsFavoris()->contains($this);
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

    /**
     * @return Collection|User[]
     */
    public function getListUserRegistered(): Collection
    {
        return $this->list_user_registered;
    }

    public function addListUserRegistered(User $userRegistered): self
    {
        if (!$this->list_user_registered->contains($userRegistered)) {
            $this->list_user_registered[] = $userRegistered;
            $userRegistered->addListEventRegistered($this);
        }

        return $this;
    }

    public function removeListUserRegistered(User $listUserRegistered): self
    {
        if ($this->list_user_registered->removeElement($listUserRegistered)) {
            $listUserRegistered->removeListEventRegistered($this);
        }

        return $this;
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
