<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\LabMethod;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LabMethodCodeRepository")
 */
class LabMethodCode
{

    public function __construct($args, $doctrine)
    {
        $this->id = $args[0];
        $this->lab_method_id = $doctrine->getRepository(LabMethod::class)->find($args[1]);
        $this->code = $args[2];
    }

     /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LabMethod")
     * @ORM\JoinColumn(nullable=true)
     */
    private $lab_method_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabMethodId(): ?LabMethod
    {
        return $this->lab_method_id;
    }

    public function setLabMethodId(?LabMethod $lab_method_id): self
    {
        $this->lab_method_id = $lab_method_id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
