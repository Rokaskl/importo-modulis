<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\LabMethod;
use App\Entity\Nutrient;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LabMethodNutrientRepository")
 */
class LabMethodNutrient
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->lab_method_id = $doctrine->getRepository(LabMethod::class)->find($args[1]);
        if(!isset($args[2])){
            $this->nutrient_id = null;
        }
        else{
            $this->nutrient_id = $doctrine->getRepository(Nutrient::class)->find($args[2]);
        }
    }

     /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LabMethod")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lab_method_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nutrient")
     * @ORM\JoinColumn(nullable=true)
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
