<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    private User $user;

    protected function setUp(): void
    {
        $this->user = new User();

        $this->user->setEmail('unit@test.esgi');
        $this->user->setPseudo('pseudo');
        $this->user->setTypeDeCompte('type_compte');
        $this->user->setPassword('password_1234567890');
        $this->user->setRoles([]);
        parent::setUp();
    }


    public function testIsValidNominal()
    {
        $this->assertTrue($this->user->isValid());
    }


    public function testNotValidDueToTypeCompte()
    {
        $this->user->setTypeDeCompte('');
        $this->assertTrue($this->user->isValid());
    }

    public function testNotValidDueToPseudo()
    {
        $this->user->setPseudo('');
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidBadEmail()
    {
        $this->user->setEmail('noEmail');
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidBadPasswordTooSmall()
    {
        $this->user->setPassword(random_bytes(5));
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidBadPasswordTooBig()
    {
        $this->user->setPassword(random_bytes(41));
        $this->assertFalse($this->user->isValid());
    }


}
