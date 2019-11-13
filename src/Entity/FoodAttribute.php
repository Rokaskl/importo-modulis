<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodAttributeRepository")
 */
class FoodAttribute
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $seq_num;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodAttributeType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food_attribute_type_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $value;

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

    public function getSeqNum(): ?int
    {
        return $this->seq_num;
    }

    public function setSeqNum(int $seq_num): self
    {
        $this->seq_num = $seq_num;

        return $this;
    }

    public function getFoodAttributeTypeId(): ?FoodAttributeType
    {
        return $this->food_attribute_type_id;
    }

    public function setFoodAttributeTypeId(?FoodAttributeType $food_attribute_type_id): self
    {
        $this->food_attribute_type_id = $food_attribute_type_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
