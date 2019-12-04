<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\FoodNutrientSource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodNutrientDerivationRepository")
 */
class FoodNutrientDerivation
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->code = $args[1];
        if(!isset($args[2])){
            $this->description = null;
        }
        else{
            $this->description = $args[2];
        }
        $this->source_id = $doctrine->getRepository(FoodNutrientSource::class)->Find($args[3]);
    }

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodNutrientSource")
     * @ORM\JoinColumn(nullable=true)
     */
    private $source_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

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

    public function getSourceId(): ?FoodNutrientSource
    {
        return $this->source_id;
    }

    public function setSourceId(?FoodNutrientSource $source_id): self
    {
        $this->source_id = $source_id;

        return $this;
    }
}
