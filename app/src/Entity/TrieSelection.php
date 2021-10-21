<?php

namespace App\Entity;

use App\Repository\TrieSelectionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrieSelectionRepository::class)
 */
class TrieSelection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ageTri;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $nbrViewTri;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dateAtCreatedTri;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAgeTri(): ?bool
    {
        return $this->ageTri;
    }

    public function setAgeTri(?bool $ageTri): self
    {
        $this->ageTri = $ageTri;

        return $this;
    }

    public function getNbrViewTri(): ?bool
    {
        return $this->nbrViewTri;
    }

    public function setNbrViewTir(?bool $nbrViewTri): self
    {
        $this->nbrViewTri = $nbrViewTri;

        return $this;
    }

    public function getDateAtCreatedTri(): ?bool
    {
        return $this->dateAtCreatedTri;
    }

    public function setDateAtCreatedTri(?bool $dateAtCreatedTri): self
    {
        $this->dateAtCreatedTri = $dateAtCreatedTri;

        return $this;
    }
}
