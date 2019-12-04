<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;
use App\Entity\Nutrient;
use App\Entity\FoodNutrientDerivation;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodNutrientRepository")
 */
class FoodNutrient
{

    //TODO:
    //NEAISKU
    //standard error nera csv faile
    //derivation id eina tarp datapoints ir min
    //nutrient_analysis_details nera csv faile

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[1]);
        $this->nutrient_id = $doctrine->getRepository(Nutrient::class)->Find($args[2]);
        $this->amount = $args[3];
        if(!isset($args[4])){
            $this->data_points = null;
        }
        else{
            $this->data_points = $args[4];
        }
        $this->standard_error = null;//for now
        // if(!isset($args[5])){
        //     $this->standard_error = null;
        // }
        // else{
        //     $this->standard_error = $args[5];
        // }
        $this->gram_weight = $args[5];
        $this->data_points = $args[6];
        if(!isset($args[7])){
            $this->derivation_id = null;
        }
        else{
            $this->derivation_id = $doctrine->getRepository(FoodNutrientDerivation::class)->Find($args[7]);
        }
        if(!isset($args[8])){
            $this->min = null;
        }
        else{
            $this->min = $args[8];
        }
        if(!isset($args[9])){
            $this->max = null;
        }
        else{
            $this->max = $args[9];
        }
        if(!isset($args[10])){
            $this->median = null;
        }
        else{
            $this->median = $args[10];
        }
        if(!isset($args[11])){
            $this->footnote = null;
        }
        else{
            $this->footnote = $args[11];
        }
        if(!isset($args[12])){
            $this->min_year_acquired = null;
        }
        else{
            $this->min_year_acquired = $args[12];
        }
        $this->nutrient_analysis_details = null;//for now
        // if(!isset($args[13])){
        //     $this->nutrient_analysis_details = null;
        // }
        // else{
        //     $this->nutrient_analysis_details = $args[13];
        // }
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Nutrient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $nutrient_id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $data_points;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $standard_error;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodNutrientDerivation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $derivation_id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $min;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $max;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $median;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $footnote;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $min_year_acquired;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nutrient_analysis_details;

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

    public function getNutrientId(): ?Nutrient
    {
        return $this->nutrient_id;
    }

    public function setNutrientId(?Nutrient $nutrient_id): self
    {
        $this->nutrient_id = $nutrient_id;

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

    public function getDataPoints(): ?int
    {
        return $this->data_points;
    }

    public function setDataPoints(?int $data_points): self
    {
        $this->data_points = $data_points;

        return $this;
    }

    public function getStandardError(): ?string
    {
        return $this->standard_error;
    }

    public function setStandardError(?string $standard_error): self
    {
        $this->standard_error = $standard_error;

        return $this;
    }

    public function getMin(): ?float
    {
        return $this->min;
    }

    public function setMin(float $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?float
    {
        return $this->max;
    }

    public function setMax(float $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getMedian(): ?float
    {
        return $this->median;
    }

    public function setMedian(float $median): self
    {
        $this->median = $median;

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

    public function getNutrientAnalysisDetails(): ?string
    {
        return $this->nutrient_analysis_details;
    }

    public function setNutrientAnalysisDetails(?string $nutrient_analysis_details): self
    {
        $this->nutrient_analysis_details = $nutrient_analysis_details;

        return $this;
    }

    public function getDerivationId(): ?FoodNutrientDerivation
    {
        return $this->derivation_id;
    }

    public function setDerivationId(?FoodNutrientDerivation $derivation_id): self
    {
        $this->derivation_id = $derivation_id;

        return $this;
    }
}
