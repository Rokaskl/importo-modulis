<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BrandedFoodRepository")
 */
class BrandedFood
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand_owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gtin_upc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ingredients;

    /**
     * @ORM\Column(type="integer")
     */
    private $serving_size;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $serving_size_unit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $household_serving_fulltext;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $branded_food_category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $data_source;

    /**
     * @ORM\Column(type="datetime")
     */
    private $modified_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $available_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFdcId(): ?Food
    {
        return $this->fdc_id;
    }

    public function setFdcId(?Food $fdc_id): self
    {
        $this->fdc_id = $fdc_id;

        return $this;
    }

    public function getBrandOwner(): ?string
    {
        return $this->brand_owner;
    }

    public function setBrandOwner(string $brand_owner): self
    {
        $this->brand_owner = $brand_owner;

        return $this;
    }

    public function getGtinUpc(): ?string
    {
        return $this->gtin_upc;
    }

    public function setGtinUpc(string $gtin_upc): self
    {
        $this->gtin_upc = $gtin_upc;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getServingSize(): ?int
    {
        return $this->serving_size;
    }

    public function setServingSize(int $serving_size): self
    {
        $this->serving_size = $serving_size;

        return $this;
    }

    public function getServingSizeUnit(): ?string
    {
        return $this->serving_size_unit;
    }

    public function setServingSizeUnit(string $serving_size_unit): self
    {
        $this->serving_size_unit = $serving_size_unit;

        return $this;
    }

    public function getHouseholdServingFulltext(): ?string
    {
        return $this->household_serving_fulltext;
    }

    public function setHouseholdServingFulltext(string $household_serving_fulltext): self
    {
        $this->household_serving_fulltext = $household_serving_fulltext;

        return $this;
    }

    public function getBrandedFoodCategory(): ?string
    {
        return $this->branded_food_category;
    }

    public function setBrandedFoodCategory(?string $branded_food_category): self
    {
        $this->branded_food_category = $branded_food_category;

        return $this;
    }

    public function getDataSource(): ?string
    {
        return $this->data_source;
    }

    public function setDataSource(?string $data_source): self
    {
        $this->data_source = $data_source;

        return $this;
    }

    public function getModifiedDate(): ?\DateTimeInterface
    {
        return $this->modified_date;
    }

    public function setModifiedDate(\DateTimeInterface $modified_date): self
    {
        $this->modified_date = $modified_date;

        return $this;
    }

    public function getAvailableDate(): ?\DateTimeInterface
    {
        return $this->available_date;
    }

    public function setAvailableDate(\DateTimeInterface $available_date): self
    {
        $this->available_date = $available_date;

        return $this;
    }
}
