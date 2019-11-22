<?php

namespace App\Entity;

use Cassandra\Date;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\FoodCategory;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodRepository")
 */
class Food
{

    public function __construct($args, $doctrine)
    {
        //$em = $doctrine->getManager();
        
        $this->id = $args[0];

        //For now doesnt exist.
        // if(!isset($args[1])){
        //     $this->foodClass = null;
        // }
        // else{
        //     $this->foodClass = $args[1];
        // }
        
        $this->foodClass = null;
        $this->data_type = $args[1];
        if(!isset($args[2])){
            $this->description = null;
        }
        else{
            $this->description = $args[2];
        }
        if(!isset($args[3]) || empty($args[3])){
            $this->food_category_id = null;
        }
        else{
            $this->food_category_id = $doctrine->getRepository(FoodCategory::class)->Find($args[3]);
        }
        
        $this->publication_date = new \DateTime($args[4]);//\DateTime::createFromFormat('Y-m-d', $args[4])->format('Y-m-d');


        //For now doesnt exist.
        // if(!isset($args[5])){
        //     $this->scientific_name = null;
        // }
        // else{
        //     $this->scientific_name = $args[5];
        // }
        // if(!isset($args[6])){
        //     $this->food_key = null;
        // }
        // else{
        //     $this->food_key = $args[6];
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $foodClass;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $data_type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    // /**
    //  * @ORM\ManyToOne(targetEntity="App\Entity\FoodCategory")
    //  * @ORM\JoinColumn(nullable=true)
    //  */
    // private $food_category_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publication_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $scientific_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $food_key;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodCategory")
     */
    private $food_category_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoodClass(): ?string
    {
        return $this->foodClass;
    }

    public function setFoodClass(?string $foodClass): self
    {
        $this->foodClass = $foodClass;

        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->data_type;
    }

    public function setDataType(string $data_type): self
    {
        $this->data_type = $data_type;

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

    public function getScientificName(): ?string
    {
        return $this->scientific_name;
    }

    public function setScientificName(?string $scientific_name): self
    {
        $this->scientific_name = $scientific_name;

        return $this;
    }

    public function getFoodKey(): ?string
    {
        return $this->food_key;
    }

    public function setFoodKey(?string $food_key): self
    {
        $this->food_key = $food_key;

        return $this;
    }

    public function getFoodCategoryId(): ?FoodCategory
    {
        return $this->food_category_id;
    }

    public function setFoodCategoryId(?FoodCategory $food_category_id): self
    {
        $this->food_category_id = $food_category_id;

        return $this;
    }
}
