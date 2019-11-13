<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodPortionRepository")
 */
class FoodPortion
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seq_num;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $amount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MeasureUnit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $measure_unit_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $portion_description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modifier;

    /**
     * @ORM\Column(type="float")
     */
    private $gram_weight;

    /**
     * @ORM\Column(type="integer", nullable="true")
     */
    private $data_points;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $footnote;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $min_year_acquired;

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

    public function getSeqNum(): ?int
    {
        return $this->seq_num;
    }

    public function setSeqNum(?int $seq_num): self
    {
        $this->seq_num = $seq_num;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getMeasureUnitId(): ?MeasureUnit
    {
        return $this->measure_unit_id;
    }

    public function setMeasureUnitId(?MeasureUnit $measure_unit_id): self
    {
        $this->measure_unit_id = $measure_unit_id;

        return $this;
    }

    public function getPortionDescription(): ?string
    {
        return $this->portion_description;
    }

    public function setPortionDescription(?string $portion_description): self
    {
        $this->portion_description = $portion_description;

        return $this;
    }

    public function getModifier(): ?string
    {
        return $this->modifier;
    }

    public function setModifier(?string $modifier): self
    {
        $this->modifier = $modifier;

        return $this;
    }

    public function getGramWeight(): ?float
    {
        return $this->gram_weight;
    }

    public function setGramWeight(float $gram_weight): self
    {
        $this->gram_weight = $gram_weight;

        return $this;
    }

    public function getDataPoints(): ?int
    {
        return $this->data_points;
    }

    public function setDataPoints(int $data_points): self
    {
        $this->data_points = $data_points;

        return $this;
    }

    public function getFootnote(): ?string
    {
        return $this->footnote;
    }

    public function setFootnote(?string $footnote): self
    {
        $this->footnote = $footnote;

        return $this;
    }

    public function getMinYearAcquired(): ?string
    {
        return $this->min_year_acquired;
    }

    public function setMinYearAcquired(?string $min_year_acquired): self
    {
        $this->min_year_acquired = $min_year_acquired;

        return $this;
    }
}
