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
     */
    private $dateEvent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $atCreated;

    /**
     * @ORM\Column(type="string", length=255)
     * @assert\NotBlank
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $lieu;

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
    private $etat;

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


    public function __construct()
    {
        $this->annonces = new ArrayCollection();
        $this->atCreated = Carbon::now();
        $this->etat = true;
        $this->nbrViews = 0;
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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

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

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

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
}
