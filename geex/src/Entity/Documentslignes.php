<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\DocumentsligneRepository;

#[ORM\Entity(repositoryClass: DocumentsligneRepository::class)]
#[ORM\Table(name: 'documentslignes')]
class Documentslignes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id_document = null;

    public function getId_document(): ?int
    {
        return $this->id_document;
    }

    public function setId_document(int $id_document): self
    {
        $this->id_document = $id_document;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id_article = null;

    public function getId_article(): ?int
    {
        return $this->id_article;
    }

    public function setId_article(int $id_article): self
    {
        $this->id_article = $id_article;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $qte = null;

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(float $qte): self
    {
        $this->qte = $qte;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $prix_unitaire_ht = null;

    public function getPrix_unitaire_ht(): ?float
    {
        return $this->prix_unitaire_ht;
    }

    public function setPrix_unitaire_ht(float $prix_unitaire_ht): self
    {
        $this->prix_unitaire_ht = $prix_unitaire_ht;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $prix_total_ht = null;

    public function getPrix_total_ht(): ?float
    {
        return $this->prix_total_ht;
    }

    public function setPrix_total_ht(float $prix_total_ht): self
    {
        $this->prix_total_ht = $prix_total_ht;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $remise = null;

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(float $remise): self
    {
        $this->remise = $remise;
        return $this;
    }

}
