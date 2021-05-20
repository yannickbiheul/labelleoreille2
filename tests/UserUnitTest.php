<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('email')
            ->setPassword('password')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setTelephone('telephone')
            ->setVille('ville')
            ->setPhoto('photo');

        $this->assertTrue($user->getEmail() === 'email');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getTelephone() === 'telephone');
        $this->assertTrue($user->getVille() === 'ville');
        $this->assertTrue($user->getPhoto() === 'photo');

    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('email')
            ->setPassword('password')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setTelephone('telephone')
            ->setVille('ville')
            ->setPhoto('photo');

        $this->assertFalse($user->getEmail() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getTelephone() === 'false');
        $this->assertFalse($user->getVille() === 'false');
        $this->assertFalse($user->getPhoto() === 'false');

    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getTelephone());
        $this->assertEmpty($user->getVille());
        $this->assertEmpty($user->getPhoto());

    }

}
