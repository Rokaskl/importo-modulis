<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodCalorieConversionFactorRepository")
 */
class FoodCalorieConversionFactor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodNutrientConversionFactor")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food_nutrient_conversion_factor_id;

    /**
     * @ORM\Column(type="float")
     */
    private $protein_value;

    /**
     * @ORM\Column(type="float")
     */
    private $fat_value;

    /**
     * @ORM\Column(type="float")
     */
    private $carbonhydrate_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoodNutrientConversionFactorId(): ?FoodNutrientConversionFactor
    {
        return $this->food_nutrient_conversion_factor_id;
    }

    public function setFoodNutrientConversionFactorId(?FoodNutrientConversionFactor $food_nutrient_conversion_factor_id): self
    {
        $this->food_nutrient_conversion_factor_id = $food_nutrient_conversion_factor_id;

        return $this;
    }

    public function getProteinValue(): ?float
    {
        return $this->protein_value;
    }

    public function setProteinValue(float $protein_value): self
    {
        $this->protein_value = $protein_value;

        return $this;
    }

    public function getFatValue(): ?float
    {
        return $this->fat_value;
    }

    public function setFatValue(float $fat_value): self
    {
        $this->fat_value = $fat_value;

        return $this;
    }

    public function getCarbonhydrateValue(): ?float
    {
        return $this->carbonhydrate_value;
    }

    public function setCarbonhydrateValue(float $carbonhydrate_value): self
    {
        $this->carbonhydrate_value = $carbonhydrate_value;

        return $this;
    }
}
