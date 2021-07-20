<?php

namespace App\Tests\Entity;

use App\Entity\Annonce;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class AnnonceTest extends TestCase
{

    private Annonce $annonce;

    protected function setUp(): void
    {
        $this->annonce = new Annonce();
        $this->annonce->setTitre("titre");
        $this->annonce->setType("type");
        $this->annonce->setDescription("description");
        $this->annonce->setNomAnimal("nom_animal");
        $this->annonce->setEspece("espece");
        $this->annonce->setLieu("lieu");
        $this->annonce->setSexe("sexe");
        $this->annonce->setAge(2);
        $this->annonce->setUtilisateur(new User());

        parent::setUp();
    }

    public function testIsValidNominal()
    {
        $this->assertTrue($this->annonce->isValid());
    }


    public function testNotValidDueToTitreEmpty()
    {
        $this->annonce->setTitre('');
        $this->assertFalse($this->annonce->isValid());
    }

    public function testNotValidDueToTypeEmpty()
    {
        $this->annonce->setType('');
        $this->assertFalse($this->annonce->isValid());
    }

    public function testNotValidDueToDescriptionEmpty()
    {
        $this->annonce->setDescription('');
        $this->assertFalse($this->annonce->isValid());
    }

    public function testNotValidDueToDescription()
    {
        $this->annonce->setDescription(random_bytes(1001));
        $this->assertFalse($this->annonce->isValid());
    }

    public function testNotValidDueToNomAnimalEmpty()
    {
        $this->annonce->setNomAnimal('');
        $this->assertFalse($this->annonce->isValid());
    }

    public function testNotValidDueToEspeceEmpty()
    {
        $this->annonce->setNomAnimal('');
        $this->assertFalse($this->annonce->isValid());
    }

    //...

}
