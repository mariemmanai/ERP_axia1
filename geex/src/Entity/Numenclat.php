<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\NomenclatureRepository;

#[ORM\Entity(repositoryClass: NomenclatureRepository::class)]
#[ORM\Table(name: 'nomenclature')]
class Numenclat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Articles::class)]
    #[ORM\JoinColumn(name: 'produit_id', referencedColumnName: 'id', nullable: false)]
    private ?Articles $produit = null;

    #[ORM\ManyToOne(targetEntity: Articles::class)]
    #[ORM\JoinColumn(name: 'matiere_id', referencedColumnName: 'id', nullable: false)]
    private ?Articles $matiere = null;

    #[ORM\Column(type: 'float')]
    private float $consommation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getProduit(): ?Articles
    {
        return $this->produit;
    }

    public function setProduit(?Articles $produit): self
    {
        $this->produit = $produit;
        return $this;
    }

    public function getMatiere(): ?Articles
    {
        return $this->matiere;
    }

    public function setMatiere(?Articles $matiere): self
    {
        $this->matiere = $matiere;
        return $this;
    }

    public function getConsommation(): float
    {
        return $this->consommation;
    }

    public function setConsommation(float $consommation): self
    {
        $this->consommation = $consommation;
        return $this;
    }
}