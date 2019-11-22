<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodNutrientConversionFactorRepository")
 */
class FoodNutrientConversionFactor
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[1]);
    }

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

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
}
