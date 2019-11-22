<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodComponentRepository")
 */
class FoodComponent
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[1]);
        $this->name = $args[2];
        $this->pct_weight = $args[3];
        $this->is_refuse = $args[4] == "Y" ? true : false;
        $this->gram_weight = $args[5];
        $this->data_points = $args[6];
        if(!isset($args[7])){
            $this->min_year_acquired = null;
        }
        else{
            $this->min_year_acquired = $args[7];
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
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $pct_weight;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_refuse;

    /**
     * @ORM\Column(type="float")
     */
    private $gram_weight;

    /**
     * @ORM\Column(type="integer")
     */
    private $data_points;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPctWeight(): ?float
    {
        return $this->pct_weight;
    }

    public function setPctWeight(float $pct_weight): self
    {
        $this->pct_weight = $pct_weight;

        return $this;
    }

    public function getIsRefuse(): ?bool
    {
        return $this->is_refuse;
    }

    public function setIsRefuse(bool $is_refuse): self
    {
        $this->is_refuse = $is_refuse;

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

    public function getMinYearAcquired(): ?string
    {
        return $this->min_year_acquired;
    }

    public function setMinYearAcquired(string $min_year_acquired): self
    {
        $this->min_year_acquired = $min_year_acquired;

        return $this;
    }
}
