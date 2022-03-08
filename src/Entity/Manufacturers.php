<?php

namespace App\Entity;

use App\Repository\ManufacturersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ManufacturersRepository::class)]
class Manufacturers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ManufacturerName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManufacturerName(): ?string
    {
        return $this->ManufacturerName;
    }

    public function setManufacturerName(?string $ManufacturerName): self
    {
        $this->ManufacturerName = $ManufacturerName;

        return $this;
    }
}
