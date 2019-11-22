<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SurveyFnddsFoodRepository")
 */
class SurveyFnddsFood
{

    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->find($args[0]);
        $this->food_code = $args[1];
        $this->wweia_category_code = $args[2];
        $this->start_date = new \DateTime($args[3]);
        $this->end_date = new \DateTime($args[4]);
    }

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
     * @ORM\Column(type="string", length=30)
     */
    private $food_code;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $wweia_category_code;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_date;

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

    public function getFoodCode(): ?string
    {
        return $this->food_code;
    }

    public function setFoodCode(string $food_code): self
    {
        $this->food_code = $food_code;

        return $this;
    }

    public function getWweiaCategoryCode(): ?string
    {
        return $this->wweia_category_code;
    }

    public function setWweiaCategoryCode(string $wweia_category_code): self
    {
        $this->wweia_category_code = $wweia_category_code;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }
}
