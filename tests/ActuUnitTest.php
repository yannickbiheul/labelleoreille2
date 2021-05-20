<?php

namespace App\Tests;

use App\Entity\Actu;
use PHPUnit\Framework\TestCase;

class ActuUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $actu = new Actu;

        $actu->setTitre('titre')
            ->setContenu('contenu')
            ->setImage('image');

        $this->assertTrue($actu->getTitre() === 'titre');
        $this->assertTrue($actu->getContenu() === 'contenu');
        $this->assertTrue($actu->getImage() === 'image');
    }

    public function testIsFalse()
    {
        $actu = new Actu;

        $actu->setTitre('titre')
            ->setContenu('contenu')
            ->setImage('image');

        $this->assertFalse($actu->getTitre() === 'false');
        $this->assertFalse($actu->getContenu() === 'false');
        $this->assertFalse($actu->getImage() === 'false');
    }

    public function testIsEmpty()
    {
        $actu = new Actu;

        $this->assertEmpty($actu->getTitre());
        $this->assertEmpty($actu->getContenu());
        $this->assertEmpty($actu->getImage());
    }

}
