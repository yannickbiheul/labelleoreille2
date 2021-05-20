<?php

namespace App\Tests;

use App\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $contact = new Contact;

        $contact->setNom('nom')
            ->setMessage('message');
        
        $this->assertTrue($contact->getNom() === 'nom');
        $this->assertTrue($contact->getMessage() === 'message');
    }

    public function testIsFalse()
    {
        $contact = new Contact;

        $contact->setNom('nom')
            ->setMessage('message');
        
        $this->assertFalse($contact->getNom() === 'false');
        $this->assertFalse($contact->getMessage() === 'false');
    }

    public function testIsEmpty()
    {
        $contact = new Contact;
        
        $this->assertEmpty($contact->getNom());
        $this->assertEmpty($contact->getMessage());
    }

}
