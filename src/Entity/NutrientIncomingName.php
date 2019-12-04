<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Nutrient;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NutrientIncomingNameRepository")
 */
class NutrientIncomingName
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->name = $args[1];
        $this->nutrient_id = $doctrine->getRepository(Nutrient::class)->find($args[2]);
    }

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nutrient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $nutrient_id;

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
