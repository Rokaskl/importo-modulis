<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InputFoodRepository")
 */
class InputFood
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[1]);
        if(!isset($args[2])){
            $this->fdc_id_of_input_food = null;
        }
        else{
            $this->fdc_id_of_input_food = $doctrine->getRepository(InputFood::class)->Find($args[2]);
        }
        if(!isset($args[3])){
            $this->seq_num = null;
        }
        else{
            $this->seq_num = $args[3];
        }
        if(!isset($args[4])){
            $this->amount = null;
        }
        else{
            $this->amount = $args[4];
        }
        if(!isset($args[5])){
            $this->sr_code = null;
        }
        else{
            $this->sr_code = $args[5];
        }
        if(!isset($args[6])){
            $this->sr_description = null;
        }
        else{
            $this->sr_description = $args[6];
        }
        if(!isset($args[7])){
            $this->unit = null;
        }
        else{
            $this->unit = $args[7];
        }
        if(!isset($args[8])){
            $this->portion_code = null;
        }
        else{
            $this->portion_code = $args[8];
        }
        if(!isset($args[9])){
            $this->portion_description = null;
        }
        else{
            $this->portion_description = $args[9];
        }
        if(!isset($args[10])){
            $this->gram_weight = null;
        }
        else{
            $this->gram_weight = $args[10];
        }
        if(!isset($args[11])){
            $this->retention_code = null;
        }
        else{
            $this->retention_code = $args[11];
        }
        if(!isset($args[12])){
            $this->survey_flag = null;
        }
        else{
            $this->survey_flag = $args[12];
        }
    }

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fdc_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InputFood")
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $portion_description;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $gram_weight;

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
