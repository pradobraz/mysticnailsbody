<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientesRepository")
 */
class Clientes
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
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @ORM\Column(type="string", length=13)
     */
    private $telefone;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $contribuinte;

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
    private $registoUpdate;

    public function __construct()
    {
        $this->registo = new \DateTime("now");
        $this->registo_update = new \DateTime("now");
        $this->marcacoes = new ArrayCollection();
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

    public function getDataNascimento(): ?\DateTimeInterface
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(?\DateTimeInterface $dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContribuinte(): ?string
    {
        return $this->contribuinte;
    }

    public function setContribuinte(?string $contribuinte): self
    {
        $this->contribuinte = $contribuinte;

        return $this;
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
        return $this->registoUpdate;
    }

    public function setRegistoUpdate(?\DateTimeInterface $registoUpdate): self
    {
        $this->registoUpdate = $registoUpdate;

        return $this;
    }
}
