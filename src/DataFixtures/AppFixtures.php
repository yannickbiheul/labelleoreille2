<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\General;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // GENERAL
        $general = new General;

        $general->setLogo('logo.png')
            ->setLogoText('logo2.png')
            ->setPhraseTitre('Des voix en mémoire')
            ->setCitation('Quoi de plus riche et émouvant que d’entendre
            et de conserver la voix de ceux que l’on aime')
            ->setDescription('Réalisation de reportage audio pour les particuliers et les professionnels')
            ->setLienFacebook('https://www.facebook.com/La-Belle-Oreille-101656721318094/?modal=admin_todo_tour')
            ->setLienInstagram('https://www.instagram.com/foureljeanne/')
            ->setProprietaire('Jeanne Fourel');

        $manager->persist($general);

        // USER ADMIN
        $admin = new User;

        $admin->setEmail('labelleoreille29@gmail.com')
            ->setRoles(['ADMIN'])
            ->setPrenom('Jeanne')
            ->setNom('Fourel')
            ->setTelephone('06 81 55 87 76')
            ->setVille('Quimper')
            ->setPhoto('jeanne.jpg');
        
        $password = $this->encoder->encodePassword($admin, 'password');
        $admin->setPassword($password);

        $manager->persist($admin);

        $manager->flush();
    }
}
