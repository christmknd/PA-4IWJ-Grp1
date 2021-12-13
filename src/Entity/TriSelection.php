<?php

namespace App\Entity;

use App\Repository\TriSelectionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TriSelectionRepository::class)
 */
class TriSelection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ageTri;


    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nbrViewTri;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateAtCreatedTri;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateEventTri;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieuTri;

    /**
     * @return mixed
     */
    public function getLieuTri()
    {
        return $this->lieuTri;
    }

    /**
     * @param mixed $lieuTri
     */
    public function setLieuTri($lieuTri): void
    {
        $this->lieuTri = $lieuTri;
    }



    /**
     * @return mixed
     */
    public function getAgeTri()
    {
        return $this->ageTri;
    }

    /**
     * @param mixed $ageTri
     */
    public function setAgeTri($ageTri): void
    {
        $this->ageTri = $ageTri;
    }

    /**
     * @return mixed
     */
    public function getNbrViewTri()
    {
        return $this->nbrViewTri;
    }

    /**
     * @param mixed $nbrViewTri
     */
    public function setNbrViewTri($nbrViewTri): void
    {
        $this->nbrViewTri = $nbrViewTri;
    }

    /**
     * @return mixed
     */
    public function getDateAtCreatedTri()
    {
        return $this->dateAtCreatedTri;
    }

    /**
     * @param mixed $dateAtCreatedTri
     */
    public function setDateAtCreatedTri($dateAtCreatedTri): void
    {
        $this->dateAtCreatedTri = $dateAtCreatedTri;
    }

    /**
     * @return mixed
     */
    public function getDateEventTri()
    {
        return $this->dateEventTri;
    }

    /**
     * @param mixed $dateEventTri
     */
    public function setDateEventTri($dateEventTri): void
    {
        $this->dateEventTri = $dateEventTri;
    }


}
