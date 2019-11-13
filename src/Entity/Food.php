<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodRepository")
 */
class Food
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $foodClass;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $data_type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodCategory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food_category_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publication_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $scientific_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $food_key;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFdcId(): ?int
    {
        return $this->fdc_id;
    }

    public function setFdcId(int $fdc_id): self
    {
        $this->fdc_id = $fdc_id;

        return $this;
    }

    public function getFoodClass(): ?string
    {
        return $this->foodClass;
    }

    public function setFoodClass(?string $foodClass): self
    {
        $this->foodClass = $foodClass;

        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->data_type;
    }

    public function setDataType(string $data_type): self
    {
        $this->data_type = $data_type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFoodCategoryId(): ?FoodCategory
    {
        return $this->food_category_id;
    }

    public function setFoodCategoryId(?FoodCategory $food_category_id): self
    {
        $this->food_category_id = $food_category_id;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publication_date;
    }

    public function setPublicationDate(\DateTimeInterface $publication_date): self
    {
        $this->publication_date = $publication_date;

        return $this;
    }

    public function getScientificName(): ?string
    {
        return $this->scientific_name;
    }

    public function setScientificName(?string $scientific_name): self
    {
        $this->scientific_name = $scientific_name;

        return $this;
    }

    public function getFoodKey(): ?string
    {
        return $this->food_key;
    }

    public function setFoodKey(?string $food_key): self
    {
        $this->food_key = $food_key;

        return $this;
    }
}
