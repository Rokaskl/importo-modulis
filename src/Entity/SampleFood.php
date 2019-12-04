<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SampleFoodRepository")
 */
class SampleFood
{
    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->find($args[0]);
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fdc_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFdcId(): ?food
    {
        return $this->fdc_id;
    }

    public function setFdcId(?food $fdc_id): self
    {
        $this->fdc_id = $fdc_id;

        return $this;
    }
}
