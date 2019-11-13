<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubSampleResultRepository")
 */
class SubSampleResult
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodNutrient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food_nutrient_id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $adjusted_amount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LabMethod")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lab_method_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nutrient_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoodNutrientId(): ?FoodNutrient
    {
        return $this->food_nutrient_id;
    }

    public function setFoodNutrientId(?FoodNutrient $food_nutrient_id): self
    {
        $this->food_nutrient_id = $food_nutrient_id;

        return $this;
    }

    public function getAdjustedAmount(): ?float
    {
        return $this->adjusted_amount;
    }

    public function setAdjustedAmount(float $adjusted_amount): self
    {
        $this->adjusted_amount = $adjusted_amount;

        return $this;
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

    public function getNutrientName(): ?string
    {
        return $this->nutrient_name;
    }

    public function setNutrientName(string $nutrient_name): self
    {
        $this->nutrient_name = $nutrient_name;

        return $this;
    }
}
