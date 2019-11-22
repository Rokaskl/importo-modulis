<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoundationFoodRepository")
 */
class FoundationFood
{

    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[0]);
        if(!isset($args[1])){
            $this->NDB_number = null;
        }
        else{
            $this->NDB_number = $args[1];
        }
        if(!isset($args[2])){
            $this->footnote = null;
        }
        else{
            $this->footnote = $args[2];
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
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NDB_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $footnote;

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

    public function getNDBNumber(): ?int
    {
        return $this->NDB_number;
    }

    public function setNDBNumber(int $NDB_number): self
    {
        $this->NDB_number = $NDB_number;

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
}
