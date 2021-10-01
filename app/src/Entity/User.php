<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as assert;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email
     * @Assert\Length(
     *     max=180
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="utilisateur", orphanRemoval=true)
     */
    private $evenements;

    /**
     * @ORM\OneToMany(targetEntity=Annonce::class, mappedBy="utilisateur", orphanRemoval=true)
     */
    private $annonces;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"Personne","Association"})
     */
    private $type_de_compte;

    /**
     * @ORM\Column(type="string", length=255)
     * @assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * Assert\NotNull
     * @Assert\Length(
     *     min = 2,
     *     max = 255
     *     )
     */
    private $siret;

    /**
     * @ORM\ManyToMany(targetEntity=Annonce::class)
     */
    private $annonces_favoris;

    /**
     * @ORM\ManyToMany(targetEntity=Evenement::class)
     */
    private $evenements_favoris;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
        $this->annonces = new ArrayCollection();
        $this->annonces_favoris = new ArrayCollection();
        $this->evenements_favoris = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $evenement->setUtilisateur($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getUtilisateur() === $this) {
                $evenement->setUtilisateur(null);
            }
        }

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
            $annonce->setUtilisateur($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getUtilisateur() === $this) {
                $annonce->setUtilisateur(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getTypeDeCompte(): ?string
    {
        return $this->type_de_compte;
    }

    public function setTypeDeCompte(string $type_de_compte): self
    {
        $this->type_de_compte = $type_de_compte;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getSiret(): ?int
    {
        return $this->siret;
    }

    public function setSiret(?int $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnoncesFavoris(): Collection
    {
        return $this->annonces_favoris;
    }

    public function addAnnoncesFavori(Annonce $annoncesFavori): self
    {
        if (!$this->annonces_favoris->contains($annoncesFavori)) {
            $this->annonces_favoris[] = $annoncesFavori;
        }

        return $this;
    }

    public function removeAnnoncesFavori(Annonce $annoncesFavori): self
    {
        $this->annonces_favoris->removeElement($annoncesFavori);

        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenementsFavoris(): Collection
    {
        return $this->evenements_favoris;
    }

    public function addEvenementsFavori(Evenement $evenementsFavori): self
    {
        if (!$this->evenements_favoris->contains($evenementsFavori)) {
            $this->evenements_favoris[] = $evenementsFavori;
        }

        return $this;
    }

    public function removeEvenementsFavori(Evenement $evenementsFavori): self
    {
        $this->evenements_favoris->removeElement($evenementsFavori);

        return $this;
    }

}
