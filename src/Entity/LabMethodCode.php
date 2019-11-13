<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LabMethodCodeRepository")
 */
class LabMethodCode
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LabMethod")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lab_method_id;

    /**
     * @ORM\Column(type="string", length=255)
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
