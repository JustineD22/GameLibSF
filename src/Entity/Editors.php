<?php

namespace App\Entity;

use App\Repository\EditorsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EditorsRepository::class)]
class Editors
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $NameEditor;

    #[ORM\Column(type: 'string', length: 255)]
    private $CountryEditor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameEditor(): ?string
    {
        return $this->NameEditor;
    }

    public function setNameEditor(string $NameEditor): self
    {
        $this->NameEditor = $NameEditor;

        return $this;
    }

    public function getCountryEditor(): ?string
    {
        return $this->CountryEditor;
    }

    public function setCountryEditor(string $CountryEditor): self
    {
        $this->CountryEditor = $CountryEditor;

        return $this;
    }
}
