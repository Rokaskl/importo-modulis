<?php
/**
 * https://www.ars.usda.gov/ARSUserFiles/80400525/Data/retn/retn06.pdf?fbclid=IwAR0RKfH9pPQdm_ckMV-468j4oG5a4UpAjvpzyr1bF4SWs3lZdDE9AbFpsiA
 * Table formatting in this link
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\FoodCategory;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RetentionFactorRepository")
 */
class RetentionFactor
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->code = $args[1];
        $this->food_group_id = $doctrine->getRepository(FoodCategory::class)->find($args[2]);
        if(!isset($args[3])){
            $this->description = null;
        }
        else{
            $this->description = $args[3];
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
     * @ORM\Column(type="integer")
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FoodCategory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food_group_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getFoodGroupId(): ?FoodCategory
    {
        return $this->food_group_id;
    }

    public function setFoodGroupId(?FoodCategory $food_group_id): self
    {
        $this->food_group_id = $food_group_id;

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
}
