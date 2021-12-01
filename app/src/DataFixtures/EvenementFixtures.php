<?php

namespace App\DataFixtures;

use App\Entity\Evenement;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Faker\Provider\fr_FR;


class EvenementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $adressList= array(
            array('4 Rue Abélard', '89100', 'Sens', 'France','48.196395848145016,3.2845575862670895'),
            array('8 Rue Dora Maar', '37000', 'Tours', 'France','47.429110712774325,0.7137568050170895'),
            array('5 Rue du Clos Vert', '35400', 'Saint-Malo', 'France','48.641168373377155,-1.9888799137329105'),
            array('72 Rue d\'Argence', '27000', 'Gravigny', 'France','49.0388596948869,1.1641962581420895'),
            array('12 Passage Hébrard', '75010', 'Paris', 'France','48.87293653100363,2.3726923518920895'),
            );

        $faker = Faker\Factory::create('fr_FR');
        $faker->addProvider(new Faker\Provider\fr_FR\Text($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Address($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Person($faker));

        for ($i = 0; $i < 5; $i++) {
            $evenement = new Evenement();
            $evenement->setTitre($faker->company);
            $evenement->setDateEvent($faker->dateTimeInInterval('now', '+ 10 months',null));
            $evenement->setDescription($faker->text(200));
            $evenement->setNbrViews($faker->numberBetween(0,50));


            $evenement->setAddress($adressList[$i][0]);
            $evenement->setZipCode($adressList[$i][1]);
            $evenement->setVille($adressList[$i][2]);
            $evenement->setPays($adressList[$i][3]);
            $evenement->setLatLng($adressList[$i][4]);

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
            UserFixtures::class
        ];
    }
}
