<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AllDownloadedTableRecordCountsRepository")
 */
class AllDownloadedTableRecordCounts
{

    public function __construct($args, $doctrine)
    {
        $this->tbl = $args[0];
        $this->number_of_records = $args[1];
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tbl;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_of_records;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTbl(): ?string
    {
        return $this->tbl;
    }

    public function setTbl(string $tbl): self
    {
        $this->tbl = $tbl;

        return $this;
    }

    public function getNumberOfRecords(): ?int
    {
        return $this->number_of_records;
    }

    public function setNumberOfRecords(int $number_of_records): self
    {
        $this->number_of_records = $number_of_records;

        return $this;
    }
}
