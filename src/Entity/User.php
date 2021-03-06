<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apelido;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registo;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $registo_update;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plainPassword;


    public function __construct()
    {
        $this->registo = new \DateTime("now");
        $this->registo_update = new \DateTime("now");
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getApelido(): ?string
    {
        return $this->apelido;
    }

    public function setApelido(string $apelido): self
    {
        $this->apelido = $apelido;

        return $this;
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

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $password)//: self
    {
        $this->plainPassword = $password;

        //return $this;
    }

    public function getPassword()//: ?string
    {
        return $this->password;
    }

    public function setPassword($password)//: self
    {
        $this->password = $password;

       // return $this;
    }

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getRegisto(): ?\DateTimeInterface
    {
        return $this->registo;
    }

    public function setRegisto(\DateTimeInterface $registo): self
    {
        $this->registo = $registo;

        return $this;
    }

    public function getRegistoUpdate(): ?\DateTimeInterface
    {
        return $this->registo_update;
    }

    public function setRegistoUpdate(?\DateTimeInterface $registo_update): self
    {
        $this->registo_update = $registo_update;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }
  
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    public function getRoles(): array
    {
        //$roles = $this->roles;

        $roles[] = 'ROLE_USER'; //''IS_AUTHENTICATED_ANONYMOUSLY;

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function eraseCredentials() {}

}