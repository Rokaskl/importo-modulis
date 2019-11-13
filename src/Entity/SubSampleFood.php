<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubSampleFoodRepository")
 */
class SubSampleFood
{
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
     * @ORM\ManyToOne(targetEntity="App\Entity\SampleFood")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id_of_sample_food;

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

    public function getFdcIdOfSampleFood(): ?SampleFood
    {
        return $this->fdc_id_of_sample_food;
    }

    public function setFdcIdOfSampleFood(?SampleFood $fdc_id_of_sample_food): self
    {
        $this->fdc_id_of_sample_food = $fdc_id_of_sample_food;

        return $this;
    }
}
