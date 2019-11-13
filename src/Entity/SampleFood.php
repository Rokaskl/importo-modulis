<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SampleFoodRepository")
 */
class SampleFood
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\food")
     * @ORM\JoinColumn(nullable=false)
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
