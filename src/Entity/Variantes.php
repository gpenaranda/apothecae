<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VariantesRepository")
 */
class Variantes
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
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UnidadesMedida", mappedBy="variantes")
     */
    private $unidadMedida;

    public function __construct()
    {
        $this->unidadMedida = new ArrayCollection();
    }

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

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * @return Collection|UnidadesMedida[]
     */
    public function getUnidadMedida(): Collection
    {
        return $this->unidadMedida;
    }

    public function addUnidadMedida(UnidadesMedida $unidadMedida): self
    {
        if (!$this->unidadMedida->contains($unidadMedida)) {
            $this->unidadMedida[] = $unidadMedida;
            $unidadMedida->setVariantes($this);
        }

        return $this;
    }

    public function removeUnidadMedida(UnidadesMedida $unidadMedida): self
    {
        if ($this->unidadMedida->contains($unidadMedida)) {
            $this->unidadMedida->removeElement($unidadMedida);
            // set the owning side to null (unless already changed)
            if ($unidadMedida->getVariantes() === $this) {
                $unidadMedida->setVariantes(null);
            }
        }

        return $this;
    }
}
