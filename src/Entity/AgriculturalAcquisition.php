<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgriculturalAcquisitionRepository")
 */
class AgriculturalAcquisition
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
     * @ORM\Column(type="datetime")
     */
    private $acquisition_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $market_class;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $treatment;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $state;

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

    public function getAcquisitionDate(): ?\DateTimeInterface
    {
        return $this->acquisition_date;
    }

    public function setAcquisitionDate(\DateTimeInterface $acquisition_date): self
    {
        $this->acquisition_date = $acquisition_date;

        return $this;
    }

    public function getMarketClass(): ?string
    {
        return $this->market_class;
    }

    public function setMarketClass(string $market_class): self
    {
        $this->market_class = $market_class;

        return $this;
    }

    public function getTreatment(): ?string
    {
        return $this->treatment;
    }

    public function setTreatment(string $treatment): self
    {
        $this->treatment = $treatment;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
