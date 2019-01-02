<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnidadesMedidaRepository")
 */
class UnidadesMedida
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $denominacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Variantes", inversedBy="unidadMedida")
     */
    private $variantes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDenominacion(): ?string
    {
        return $this->denominacion;
    }

    public function setDenominacion(string $denominacion): self
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    public function getVariantes(): ?Variantes
    {
        return $this->variantes;
    }

    public function setVariantes(?Variantes $variantes): self
    {
        $this->variantes = $variantes;

        return $this;
    }
}
