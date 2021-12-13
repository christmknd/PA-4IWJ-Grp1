<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++){
            $user = new User();
            if($i==1) {
                $user->setPseudo('admin'.$i);
                $user->setEmail('admin@test.fr');
                $user->setRoles(["ROLE_ADMIN"]);
                $user->setTypeDeCompte("Admin");
                $user->setIsVerified(true);
            }
            elseif($i%3==0) {
                $user->setPseudo('asso'.$i);
                $user->setEmail('asso'.$i.'@test.fr');
                $user->setRoles(["ROLE_ASSO"]);
                $user->setTypeDeCompte("Association");

            }
            else{
                $user->setPseudo('user'.$i);
                $user->setEmail('user'.$i.'@test.fr');
                $user->setTypeDeCompte("Personne");

            }

            $password = $this->encoder->encodePassword($user, $user->getEmail());
            $user->setPassword($password);

            $this->addReference($user->getPseudo(), $user);

            $manager->persist($user);
        }
        $manager->flush();
    }
}
