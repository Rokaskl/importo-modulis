<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LabMethodNutrientRepository")
 */
class LabMethodNutrient
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LabMethod")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lab_method_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nutrient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nutrient_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabMethodId(): ?LabMethod
    {
        return $this->lab_method_id;
    }

    public function setLabMethodId(?LabMethod $lab_method_id): self
    {
        $this->lab_method_id = $lab_method_id;

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
