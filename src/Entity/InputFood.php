<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InputFoodRepository")
 */
class InputFood
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
     * @ORM\ManyToOne(targetEntity="App\Entity\food")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fdc_id_of_input_food;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seq_num;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sr_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sr_description;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $unit;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $portion_code;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $gram_weight;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $portion_description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $retention_code;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $survey_flag;

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

    public function setSeqNum(int $seq_num): self
    {
        $this->seq_num = $seq_num;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getSrCode(): ?string
    {
        return $this->sr_code;
    }

    public function setSrCode(?string $sr_code): self
    {
        $this->sr_code = $sr_code;

        return $this;
    }

    public function getSrDescription(): ?string
    {
        return $this->sr_description;
    }

    public function setSrDescription(?string $sr_description): self
    {
        $this->sr_description = $sr_description;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getPortionCode(): ?string
    {
        return $this->portion_code;
    }

    public function setPortionCode(?string $portion_code): self
    {
        $this->portion_code = $portion_code;

        return $this;
    }

    public function getFdcIdOfInputFood(): ?food
    {
        return $this->fdc_id_of_input_food;
    }

    public function setFdcIdOfInputFood(?food $fdc_id_of_input_food): self
    {
        $this->fdc_id_of_input_food = $fdc_id_of_input_food;

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

    public function getGramWeight(): ?float
    {
        return $this->gram_weight;
    }

    public function setGramWeight(?float $gram_weight): self
    {
        $this->gram_weight = $gram_weight;

        return $this;
    }

    public function getRetentionCode(): ?int
    {
        return $this->retention_code;
    }

    public function setRetentionCode(?int $retention_code): self
    {
        $this->retention_code = $retention_code;

        return $this;
    }

    public function getSurveyFlag(): ?string
    {
        return $this->survey_flag;
    }

    public function setSurveyFlag(?string $survey_flag): self
    {
        $this->survey_flag = $survey_flag;

        return $this;
    }
}
