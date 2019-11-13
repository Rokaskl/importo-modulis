<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NutrientRepository")
 */
class Nutrient
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $unit_name;

    /**
     * @ORM\Column(type="float")
     */
    private $nutrient_nbr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUnitName(): ?string
    {
        return $this->unit_name;
    }

    public function setUnitName(string $unit_name): self
    {
        $this->unit_name = $unit_name;

        return $this;
    }

    public function getNutrientNbr(): ?float
    {
        return $this->nutrient_nbr;
    }

    public function setNutrientNbr(float $nutrient_nbr): self
    {
        $this->nutrient_nbr = $nutrient_nbr;

        return $this;
    }
}
