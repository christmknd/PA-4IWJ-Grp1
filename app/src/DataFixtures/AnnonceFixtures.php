<?php

namespace App\DataFixtures;

use App\DataFixtures\UserFixtures;
use App\Entity\Annonce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AnnonceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $annonce = new Annonce();
            $annonce->setTitre('annonce '.$i);
            if ($i%2==0) $annonce->setType('Adoption');
            else $annonce->setType('Perte');
            $annonce->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac nibh quis orci maximus condimentum. Praesent sagittis posuere velit in dapibus. Duis arcu leo, pharetra ut accumsan sed, vehicula vitae leo. ');
            $annonce->setNomAnimal('Nom Animal'.$i);
            $annonce->setAge($i);
            if ($i%2==0) $annonce->setSexe('Male');
            else $annonce->setSexe('Femelle');
            if ($i%5==0) $annonce->setEspece('Chien');
            elseif ($i%5==1) $annonce->setEspece('Chat');
            elseif ($i%5==2) $annonce->setEspece('Serpent');
            elseif ($i%5==3) $annonce->setEspece('Hamster');
            else $annonce->setEspece('Espece'.$i);
            if($i<10) {
                $annonce->setAddress($i . ' Rue de Sèvres');
                $annonce->setZipCode('75007');
                $annonce->setVille('Paris');
                $annonce->setPays('France');
                $annonce->setLatLng('48.8508029,2.324595'.$i);

            }
            else {
                $annonce->setAddress($i . ' Rue de Genève');
                $annonce->setZipCode('1003');
                $annonce->setVille('Lausanne');
                $annonce->setPays('Suisse');
                $annonce->setLatLng('46.5220711,6.6281542999999'.$i);
            }
            if ($i==1)$annonce->setUtilisateur($this->getReference('admin'.$i));
            else $annonce->setUtilisateur($this->getReference(($i%3==0)?'asso'.$i:'user'.$i));
            $manager->persist($annonce);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }
}
