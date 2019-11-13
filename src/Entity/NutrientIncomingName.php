<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NutrientIncomingNameRepository")
 */
class NutrientIncomingName
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Nutrient")
     */
    private $nutrient_id;

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

    public function getNutrientId(): ?Nutrient
    {
        return $this->nutrient_id;
    }

    public function setNutrientId(?Nutrient $nutrient_id): self
    {
        $this->nutrient_id = $nutrient_id;

        return $this;
    }
}
