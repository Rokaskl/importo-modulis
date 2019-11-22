<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NutrientRepository")
 */
class Nutrient
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->name = $args[1];
        $this->unit_name = $args[2];
        $this->nutrient_nbr = $args[3];
        $this->rank = $args[4];
    }

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
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

    /**
     * @ORM\Column(type="integer")
     */
    private $rank;

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

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }
}
