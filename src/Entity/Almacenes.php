<?php

namespace App\Entity;

# Validaciones 
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlmacenesRepository")
 */
class Almacenes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=120)
     */
    private $nombre_corto;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

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

    public function getNombreCorto(): ?string
    {
        return $this->nombre_corto;
    }

    public function setNombreCorto(string $nombre_corto): self
    {
        $this->nombre_corto = $nombre_corto;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }
}
