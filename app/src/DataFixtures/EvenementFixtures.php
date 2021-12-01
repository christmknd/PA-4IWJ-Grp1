<?php

namespace App\DataFixtures;

use App\Entity\Evenement;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EvenementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $evenement = new Evenement();
            $evenement->setTitre('Evenement '.$i);
            $evenement->setDateEvent(new DateTime('NOW'));
            date_modify($evenement->getDateEvent(), '+'.$i.'day');
            $evenement->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac nibh quis orci maximus condimentum. Praesent sagittis posuere velit in dapibus. Duis arcu leo, pharetra ut accumsan sed, vehicula vitae leo. Sed tincidunt dui non purus fringilla vehicula. ');
            if($i<5) {
                $evenement->setAddress($i . ' Rue de Paris');
                $evenement->setZipCode('75008');
                $evenement->setVille('Paris');
                $evenement->setPays('France');
                $evenement->setLatLng('48.8508301,2.324595'.$i);

            }
            else {
                $evenement->setAddress($i . ' Rue de Genève');
                $evenement->setZipCode('1003');
                $evenement->setVille('Lausanne');
                $evenement->setPays('Suisse');
                $evenement->setLatLng('46.5220711,6.6281542999999'.$i);
            }
            if($i%3==0){
                $evenement->setUtilisateur($this->getReference('asso'.$i));
            }else{
                $x=$i%3;
                $evenement->setUtilisateur($this->getReference('asso'.($i-$x)));
            }

            $manager->persist($evenement);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            AnnonceFixtures::class
        ];
    }
}
