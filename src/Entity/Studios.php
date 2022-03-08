<?php

namespace App\Entity;

use App\Repository\StudiosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudiosRepository::class)]
class Studios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $NameStudio;

    #[ORM\Column(type: 'string', length: 255)]
    private $CountryStudio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameStudio(): ?string
    {
        return $this->NameStudio;
    }

    public function setNameStudio(string $NameStudio): self
    {
        $this->NameStudio = $NameStudio;

        return $this;
    }

    public function getCountryStudio(): ?string
    {
        return $this->CountryStudio;
    }

    public function setCountryStudio(string $CountryStudio): self
    {
        $this->CountryStudio = $CountryStudio;

        return $this;
    }
}
