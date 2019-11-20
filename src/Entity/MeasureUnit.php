<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MeasureUnitRepository")
 */
class MeasureUnit
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $abbreviation;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): self
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    public function __construct($args, $doctrine)
    {
        //$em = $doctrine->getManager();
        
        $this->id = $args[0];
       
        $this->name = $args[1];
        $this->abbreviation = "";
        echo $args[0] . "   " . $args[1] . "  fields: " . $this->getId() . " " . $this->getName() . "<br>";
        //$doctrine->getManager()->persist($this);
        // if(isset($args[2])){
        //     $this->abbreviation = "";
        // }
        // else{
        //     $this->abbreviation = $args[2];
        // }
    }
}
