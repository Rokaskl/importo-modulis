<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodUpdateLogEntryRepository")
 */
class FoodUpdateLogEntry
{
    //TODO:
    //NEAISKU
    //fdc_id?? csv faile nera
    //csv faile yra last_updated cia ne
    //csv faile nera publication date

    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[0]);
        if(!isset($args[1])){
            $this->description = null;
        }
        else{
            $this->description = $args[1];
        }
        $this->publication_date = new \DateTime($args[2]);
        
    }

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publication_date;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publication_date;
    }

    public function setPublicationDate(\DateTimeInterface $publication_date): self
    {
        $this->publication_date = $publication_date;

        return $this;
    }
}
