<?php

namespace App\Tests;

use App\Entity\General;
use PHPUnit\Framework\TestCase;

class GeneralUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $general = new General;

        $general->setLogo('logo')
            ->setLogoText('logoText')
            ->setPhraseTitre('phrase titre')
            ->setCitation('citation')
            ->setDescription('description')
            ->setLienFacebook('lien facebook')
            ->setLienInstagram('lien instagram')
            ->setProprietaire('proprietaire');

        $this->assertTrue($general->getLogo() === 'logo');
        $this->assertTrue($general->getLogoText() === 'logoText');
        $this->assertTrue($general->getPhraseTitre() === 'phrase titre');
        $this->assertTrue($general->getCitation() === 'citation');
        $this->assertTrue($general->getDescription() === 'description');
        $this->assertTrue($general->getLienFacebook() === 'lien facebook');
        $this->assertTrue($general->getLienInstagram() === 'lien instagram');
        $this->assertTrue($general->getProprietaire() === 'proprietaire');
    }

    public function testIsFalse()
    {
        $general = new General;

        $general->setLogo('logo')
            ->setLogoText('logoText')
            ->setPhraseTitre('phrase titre')
            ->setCitation('citation')
            ->setDescription('description')
            ->setLienFacebook('lien facebook')
            ->setLienInstagram('lien instagram')
            ->setProprietaire('proprietaire');

        $this->assertFalse($general->getLogo() === 'false');
        $this->assertFalse($general->getLogoText() === 'false');
        $this->assertFalse($general->getPhraseTitre() === 'false');
        $this->assertFalse($general->getCitation() === 'false');
        $this->assertFalse($general->getDescription() === 'false');
        $this->assertFalse($general->getLienFacebook() === 'false');
        $this->assertFalse($general->getLienInstagram() === 'false');
        $this->assertFalse($general->getProprietaire() === 'false');
    }

    public function testIsEmpty()
    {
        $general = new General;

        $this->assertEmpty($general->getLogo());
        $this->assertEmpty($general->getLogoText());
        $this->assertEmpty($general->getPhraseTitre());
        $this->assertEmpty($general->getCitation());
        $this->assertEmpty($general->getDescription());
        $this->assertEmpty($general->getLienFacebook());
        $this->assertEmpty($general->getLienInstagram());
        $this->assertEmpty($general->getProprietaire());
    }
}
