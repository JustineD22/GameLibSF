<?php

namespace App\Entity;

use App\Repository\PlatformsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatformsRepository::class)]
class Platforms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ModelName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ModelRef;

    #[ORM\ManyToOne(targetEntity: Manufacturers::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_manufacturer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelName(): ?string
    {
        return $this->ModelName;
    }

    public function setModelName(string $ModelName): self
    {
        $this->ModelName = $ModelName;

        return $this;
    }

    public function getModelRef(): ?string
    {
        return $this->ModelRef;
    }

    public function setModelRef(?string $ModelRef): self
    {
        $this->ModelRef = $ModelRef;

        return $this;
    }

    public function getIdManufacturer(): ?Manufacturers
    {
        return $this->id_manufacturer;
    }

    public function setIdManufacturer(?Manufacturers $id_manufacturer): self
    {
        $this->id_manufacturer = $id_manufacturer;

        return $this;
    }
}
