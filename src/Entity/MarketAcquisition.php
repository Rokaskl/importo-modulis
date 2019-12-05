<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Food;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarketAcquisitionRepository")
 */
class MarketAcquisition
{

    public function __construct($args, $doctrine)
    {
        $this->fdc_id = $doctrine->getRepository(Food::class)->Find($args[0]);
        if(!isset($args[1])){
            $this->brand_description = null;
        }
        else{
            $this->brand_description = $args[1];
        }
        if(!isset($args[2])){
            $this->expiration_date = null;
        }
        else{
            $this->expiration_date = new \DateTime($args[2]);
        }
        $this->label_weight = $args[3];
        $this->location = $args[4];
        $this->acquisition_date = new \DateTime($args[5]);
        $this->sales_type = $args[6];
        if(!isset($args[7])){
            $this->sales_lot_nbr = null;
        }
        else{
            $this->sales_lot_nbr = $args[7];
        }
        if(!isset($args[8])){
            $this->sell_by_date = null;
        }
        else{
            $this->sell_by_date = new \DateTime($args[8]);
        }
        if(!isset($args[9])){
            $this->store_city = null;
        }
        else{
            $this->store_city = $args[9];
        }
        if(!isset($args[10])){
            $this->store_name = null;
        }
        else{
            $this->store_name = $args[10];
        }
        if(!isset($args[11])){
            $this->store_state = null;
        }
        else{
            $this->store_state = $args[11];
        }
        if(!isset($args[12])){
            $this->upc_code = null;
        }
        else{
            $this->upc_code = $args[12];
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
     * @ORM\JoinColumn(nullable=true)
     */
    private $fdc_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $brand_description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expiration_date;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $label_weight;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $acquisition_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sales_type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sales_lot_nbr;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sell_by_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $store_city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $store_name;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $store_state;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $upc_code;

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

    public function getBrandDescription(): ?string
    {
        return $this->brand_description;
    }

    public function setBrandDescription(?string $brand_description): self
    {
        $this->brand_description = $brand_description;

        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expiration_date;
    }

    public function setExpirationDate(\DateTimeInterface $expiration_date): self
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }

    public function getLabelWeight(): ?float
    {
        return $this->label_weight;
    }

    public function setLabelWeight(float $label_weight): self
    {
        $this->label_weight = $label_weight;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getAcquisitionDate(): ?\DateTimeInterface
    {
        return $this->acquisition_date;
    }

    public function setAcquisitionDate(\DateTimeInterface $acquisition_date): self
    {
        $this->acquisition_date = $acquisition_date;

        return $this;
    }

    public function getSalesType(): ?string
    {
        return $this->sales_type;
    }

    public function setSalesType(string $sales_type): self
    {
        $this->sales_type = $sales_type;

        return $this;
    }

    public function getSalesLotNbr(): ?string
    {
        return $this->sales_lot_nbr;
    }

    public function setSalesLotNbr(string $sales_lot_nbr): self
    {
        $this->sales_lot_nbr = $sales_lot_nbr;

        return $this;
    }

    public function getSellByDate(): ?\DateTimeInterface
    {
        return $this->sell_by_date;
    }

    public function setSellByDate(?\DateTimeInterface $sell_by_date): self
    {
        $this->sell_by_date = $sell_by_date;

        return $this;
    }

    public function getStoreCity(): ?string
    {
        return $this->store_city;
    }

    public function setStoreCity(?string $store_city): self
    {
        $this->store_city = $store_city;

        return $this;
    }

    public function getStoreName(): ?string
    {
        return $this->store_name;
    }

    public function setStoreName(?string $store_name): self
    {
        $this->store_name = $store_name;

        return $this;
    }

    public function getStoreState(): ?string
    {
        return $this->store_state;
    }

    public function setStoreState(?string $store_state): self
    {
        $this->store_state = $store_state;

        return $this;
    }

    public function getUpcCode(): ?string
    {
        return $this->upc_code;
    }

    public function setUpcCode(?string $upc_code): self
    {
        $this->upc_code = $upc_code;

        return $this;
    }
}
