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
     * @ORM\Column(type="integer")
     */
    private $idCliente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $servico1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $servico2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $servico3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $servico4;

    /**
     * @ORM\Column(type="date")
     */
    private $marcacaoDia;

    /**
     * @ORM\Column(type="time")
     */
    private $marcacaoHora;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registo;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $registo_update;

    public function __construct(){

        $this->registo = new \DateTime("now");
        $this->registo_update = new \DateTime("now");

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCliente(): ?int
    {
        return $this->idCliente;
    }

    public function setIdCliente(int $idCliente): self
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    public function getServico1(): ?string
    {
        return $this->servico1;
    }

    public function setServico1(string $servico1): self
    {
        $this->servico1 = $servico1;

        return $this;
    }

    public function getServico2(): ?string
    {
        return $this->servico2;
    }

    public function setServico2(?string $servico2): self
    {
        $this->servico2 = $servico2;

        return $this;
    }

    public function getServico3(): ?string
    {
        return $this->servico3;
    }

    public function setServico3(?string $servico3): self
    {
        $this->servico3 = $servico3;

        return $this;
    }

    public function getServico4(): ?string
    {
        return $this->servico4;
    }

    public function setServico4(?string $servico4): self
    {
        $this->servico4 = $servico4;

        return $this;
    }

    public function getMarcacaoDia(): ?\DateTimeInterface
    {
        return $this->marcacaoDia;
    }

    public function setMarcacaoDia(\DateTimeInterface $marcacaoDia): self
    {
        $this->marcacaoDia = $marcacaoDia;

        return $this;
    }

    public function getMarcacaoHora(): ?\DateTimeInterface
    {
        return $this->marcacaoHora;
    }

    public function setMarcacaoHora(\DateTimeInterface $marcacaoHora): self
    {
        $this->marcacaoHora = $marcacaoHora;

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

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

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
}
