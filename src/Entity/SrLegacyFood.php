<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SrLegacyFoodRepository")
 */
class SrLegacyFood
{
    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->find($args[0]);
        $this->NDB_number = $args[1];
    }

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
     * @ORM\Column(type="integer")
     */
    private $NDB_number;

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

    public function getNDBNumber(): ?int
    {
        return $this->NDB_number;
    }

    public function setNDBNumber(int $NDB_number): self
    {
        $this->NDB_number = $NDB_number;

        return $this;
    }
}
