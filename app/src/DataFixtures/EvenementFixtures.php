<?php

namespace App\DataFixtures;

use App\Entity\Evenement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EvenementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $evenement = new Evenement();
            $evenement->setTitre('Evenement '.$i);
            $evenement->setDateEvent('2022-'.($i%12).'-'.$i);
            $evenement->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac nibh quis orci maximus condimentum. Praesent sagittis posuere velit in dapibus. Duis arcu leo, pharetra ut accumsan sed, vehicula vitae leo. Sed tincidunt dui non purus fringilla vehicula. Mauris venenatis ex vitae metus mattis, vitae mollis felis maximus. Curabitur interdum, sem eget congue mollis, urna velit pharetra lacus, nec venenatis leo mi quis elit. Fusce imperdiet in turpis eu tristique. Aliquam sed sapien vitae nunc bibendum viverra at at ante. Fusce at ligula nec purus varius tempor. In hac habitasse platea dictumst. Etiam rutrum diam sit amet erat mattis, non ultricies neque molestie. Nunc massa augue, gravida at dignissim eu, mollis sit amet neque. Nullam varius nibh vitae mi fringilla commodo. Duis vulputate pharetra commodo. Vestibulum iaculis finibus nisl at tempor.');
            if ($i%3==0)$evenement->setEtat(false);
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
            $manager->persist($evenement);
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
