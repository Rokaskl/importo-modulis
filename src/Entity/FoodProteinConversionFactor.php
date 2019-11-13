<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodProteinConversionFactorRepository")
 */
class FoodProteinConversionFactor
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
    private $value;

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

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
