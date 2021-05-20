<?php

namespace App\Entity;

use App\Repository\ImageActuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageActuRepository::class)
 */
class ImageActu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity=Actu::class, mappedBy="imageActu", cascade={"persist", "remove"})
     */
    private $actu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getActu(): ?Actu
    {
        return $this->actu;
    }

    public function setActu(?Actu $actu): self
    {
        // unset the owning side of the relation if necessary
        if ($actu === null && $this->actu !== null) {
            $this->actu->setImageActu(null);
        }

        // set the owning side of the relation if necessary
        if ($actu !== null && $actu->getImageActu() !== $this) {
            $actu->setImageActu($this);
        }

        $this->actu = $actu;

        return $this;
    }
}
