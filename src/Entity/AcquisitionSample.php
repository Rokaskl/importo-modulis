<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;
use App\Entity\SampleFood;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AcquisitionSampleRepository")
 */
class AcquisitionSample
{
    public function __construct($args, $doctrine)
    {
        $this->fdc_id_of_sample_food = $doctrine->getRepository(SampleFood::class)->Find($args[0]);
        $this->fdc_id_of_acquisition_food = $doctrine->getRepository(Food::class)->Find($args[1]);
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SampleFood")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id_of_sample_food;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id_of_acquisition_food;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFdcIdOfAcquisitionFood(): ?Food
    {
        return $this->fdc_id_of_acquisition_food;
    }

    public function setFdcIdOfAcquisitionFood(?Food $fdc_id_of_acquisition_food): self
    {
        $this->fdc_id_of_acquisition_food = $fdc_id_of_acquisition_food;

        return $this;
    }
}
