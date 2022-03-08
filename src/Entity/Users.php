<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\Column(type: 'string', length: 255)]
    private $Users;

    #[ORM\Column(type: 'string', length: 255)]
    private $UserFirstName;

    #[ORM\Column(type: 'string', length: 255)]
    private $Pseudo;

    #[ORM\Column(type: 'datetime_immutable')]
    private $AccountCreation;

    #[ORM\Column(type: 'date')]
    private $AccountValidation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Bio;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Avatar;

    #[ORM\OneToMany(mappedBy: 'users', targetEntity: Roles::class)]
    private $id_role;

    #[ORM\ManyToOne(targetEntity: Roles::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_roles;

    public function __construct()
    {
        $this->id_role = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    public function setUsers(string $UserName): self
    {
        $this->UserName = $UserName;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->UserFirstName;
    }

    public function setUserFirstName(string $UserFirstName): self
    {
        $this->UserFirstName = $UserFirstName;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->Pseudo;
    }

    public function setPseudo(string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;

        return $this;
    }

    public function getAccountCreation(): ?\DateTimeImmutable
    {
        return $this->AccountCreation;
    }

    public function setAccountCreation(\DateTimeImmutable $AccountCreation): self
    {
        $this->AccountCreation = $AccountCreation;

        return $this;
    }

    public function getAccountValidation(): ?\DateTimeInterface
    {
        return $this->AccountValidation;
    }

    public function setAccountValidation(\DateTimeInterface $AccountValidation): self
    {
        $this->AccountValidation = $AccountValidation;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->Bio;
    }

    public function setBio(?string $Bio): self
    {
        $this->Bio = $Bio;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->Avatar;
    }

    public function setAvatar(?string $Avatar): self
    {
        $this->Avatar = $Avatar;

        return $this;
    }

    public function getIdRoles(): ?Roles
    {
        return $this->id_roles;
    }

    public function setIdRoles(?Roles $id_roles): self
    {
        $this->id_roles = $id_roles;

        return $this;
    }
}
