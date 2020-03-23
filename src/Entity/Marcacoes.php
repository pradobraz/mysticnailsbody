<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarcacoesRepository")
 */
class Marcacoes
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
    private $nomeCliente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tiposervico1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tiposervico2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tiposervico3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tiposervico4;

    /**
     * @ORM\Column(type="date")
     */
    private $diaM;

    /**
     * @ORM\Column(type="time")
     */
    private $horaM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $notas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $valor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registo;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $registo_update;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clientes", inversedBy="marcacoes")
     */
    private $cliente;

    public function __construct()
    {
        $this->registo = new \DateTime("now");
        $this->registo_update = new \DateTime("now");
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeCliente(): ?string
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    public function getTiposervico1(): ?string
    {
        return $this->tiposervico1;
    }

    public function setTiposervico1(string $tiposervico1): self
    {
        $this->tiposervico1 = $tiposervico1;

        return $this;
    }

    public function getTiposervico2(): ?string
    {
        return $this->tiposervico2;
    }

    public function setTiposervico2(?string $tiposervico2): self
    {
        $this->tiposervico2 = $tiposervico2;

        return $this;
    }

    public function getTiposervico3(): ?string
    {
        return $this->tiposervico3;
    }

    public function setTiposervico3(?string $tiposervico3): self
    {
        $this->tiposervico3 = $tiposervico3;

        return $this;
    }

    public function getTiposervico4(): ?string
    {
        return $this->tiposervico4;
    }

    public function setTiposervico4(?string $tiposervico4): self
    {
        $this->tiposervico4 = $tiposervico4;

        return $this;
    }

    public function getDiaM(): ?\DateTimeInterface
    {
        return $this->diaM;
    }

    public function setDiaM(\DateTimeInterface $diaM): self
    {
        $this->diaM = $diaM;

        return $this;
    }

    public function getHoraM(): ?\DateTimeInterface
    {
        return $this->horaM;
    }

    public function setHoraM(\DateTimeInterface $horaM): self
    {
        $this->horaM = $horaM;

        return $this;
    }

    public function getNotas(): ?string
    {
        return $this->notas;
    }

    public function setNotas(?string $notas): self
    {
        $this->notas = $notas;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(?string $valor): self
    {
        $this->valor = $valor;

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

    public function getCliente(): ?Clientes
    {
        return $this->cliente;
    }

    public function setCliente(?Clientes $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }
}
