<?php

namespace App\DataFixtures;

use App\DataFixtures\UserFixtures;
use App\Entity\Annonce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;


class AnnonceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $petName= array('Coco','Miel','Suzie','Salsa','Snow','Sandra','Sucette','Soisic','Soco','Sica','Sirene','Sardine','Samba','Toto','Myster','Rock','Flash');

        $adressList= array(
            array('31 Rue Courtois', '93500', 'Pantin', 'France','48.890251,2.416415'),
            array('84 Rue Étienne Dolet', '92240', 'Malakoff', 'France','48.81419042281802,2.2999079280639645'),
            array('6 Rue du Dobropol', '75017', 'Paris', 'France','48.8828713629547,2.2861750179077145'),
            array('40 Rue du Maréchal Joffre', '78000', 'Versailles', 'France','48.793386831443144,2.1200068050170895'),
            array('4 Avenue des Étangs', '14123', 'Fleury-sur-Orne', 'France','49.1539591087395,-0.3629033512329105'),
            array('18 Rue du Thabor', '35708', 'Rennes','France','48.11577665748017,-1.6702763981079105'),
            array('8 Rue du Moulin du Gué', '87270', 'Couzeix', 'France','45.86046569403345,1.2520868831420895'),
            array('47 Rue Charles Paris', '33130', 'Bègles', 'France','44.81019498945066,-0.5606572574829105'),
            array('88 Boulevard Victor Hugo', '92200', 'Neuilly-sur-Seine', 'France','48.89460998412019,2.2738153987670895'),
            array('29 Avenue Aristide Briand', '10600', 'La Chapelle-Saint-Luc', 'France', '48.32074003050015,4.0645868831420895')
        );

        $faker = Faker\Factory::create('fr_FR');
        $faker->addProvider(new Faker\Provider\fr_FR\Text($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Address($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Person($faker));

        for ($i = 0; $i < 10; $i++) {
            $annonce = new Annonce();
            $annonce->setTitre($faker->randomElement($petName));
            $annonce->setType($faker->randomElement(array ('Adoption','Perte')));
            $annonce->setDescription($faker->text(200));
            $annonce->setNomAnimal($annonce->getTitre());
            $annonce->setAge($faker->numberBetween(0,5));
            $annonce->setSexe($faker->randomElement(array ('Male','Femelle')));
            $annonce->setEspece($faker->randomElement(array ('Chien','Chat','Serpent','Hamster')));
            $annonce->setNbrViews($faker->numberBetween(0,50));

            $annonce->setAddress($adressList[$i][0]);
            $annonce->setZipCode($adressList[$i][1]);
            $annonce->setVille($adressList[$i][2]);
            $annonce->setPays($adressList[$i][3]);
            $annonce->setLatLng($adressList[$i][4]);


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
