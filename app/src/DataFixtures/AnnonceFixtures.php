<?php

namespace App\DataFixtures;

use App\Entity\Annonce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnnonceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $annonce = new Annonce();
            $annonce->setTitre('annonce '.$i);
            if ($i%2==0) $annonce->setType('Adoption');
            else $annonce->setType('Perte');
            $annonce->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac nibh quis orci maximus condimentum. Praesent sagittis posuere velit in dapibus. Duis arcu leo, pharetra ut accumsan sed, vehicula vitae leo. Sed tincidunt dui non purus fringilla vehicula. Mauris venenatis ex vitae metus mattis, vitae mollis felis maximus. Curabitur interdum, sem eget congue mollis, urna velit pharetra lacus, nec venenatis leo mi quis elit. Fusce imperdiet in turpis eu tristique. Aliquam sed sapien vitae nunc bibendum viverra at at ante. Fusce at ligula nec purus varius tempor. In hac habitasse platea dictumst. Etiam rutrum diam sit amet erat mattis, non ultricies neque molestie. Nunc massa augue, gravida at dignissim eu, mollis sit amet neque. Nullam varius nibh vitae mi fringilla commodo. Duis vulputate pharetra commodo. Vestibulum iaculis finibus nisl at tempor.');
            if ($i%3==0)$annonce->setEtat(false);
            $annonce->setNomAnimal('Nom Animal'.$i);
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
            $manager->persist($annonce);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
