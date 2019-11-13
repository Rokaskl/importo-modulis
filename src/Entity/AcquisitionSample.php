<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AcquisitionSampleRepository")
 */
class AcquisitionSample
{
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
}
