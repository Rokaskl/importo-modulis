<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;
use App\Entity\SampleFood;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubSampleFoodRepository")
 */
class SubSampleFood
{

    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->find($args[0]);
        if(!isset($args[1])){
            $this->fdc_id_of_sample_food = null;
        }
        else{
            $this->fdc_id_of_sample_food = $doctrine->getRepository(SampleFood::class)->find($args[1]);
        }
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SampleFood")
     * @ORM\JoinColumn(nullable=true)
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
