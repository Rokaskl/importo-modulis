<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WweiaFoodCategoryRepository")
 */
class WweiaFoodCategory
{

    public function __construct($args, $doctrine)
    {
        $this->wweia_food_category_code = $args[0];
        if(!isset($args[1])){
            $this->wweia_food_category_description = null;
        }
        else{
            $this->wweia_food_category_description = $args[1];
        }
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wweia_food_category_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wweia_food_category_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWweiaFoodCategoryCode(): ?int
    {
        return $this->wweia_food_category_code;
    }

    public function setWweiaFoodCategoryCode(int $wweia_food_category_code): self
    {
        $this->wweia_food_category_code = $wweia_food_category_code;

        return $this;
    }

    public function getWweiaFoodCategoryDescription(): ?string
    {
        return $this->wweia_food_category_description;
    }

    public function setWweiaFoodCategoryDescription(string $wweia_food_category_description): self
    {
        $this->wweia_food_category_description = $wweia_food_category_description;

        return $this;
    }
}
