<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\DocumentsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: DocumentsRepository::class)]
#[ORM\Table(name: 'documents')]
#[ORM\HasLifecycleCallbacks]
class Documents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 15, unique: true)]
    private ?string $reference = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $docDate = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'emetteur_id', referencedColumnName: 'id')]
    private ?Users $emetteur = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'destinataire_id', referencedColumnName: 'id')]
    private ?Users $destinataire = null;

    #[ORM\Column(
        type: 'string',
        length: 50)]
    private ?string $type = null;

    #[ORM\Column(
        type: 'string',
        length: 15,
    )]
    private ?string $status = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $montantHt = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $tauxTva = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $montantTva = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $timbre = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $retenu = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'create_by', referencedColumnName: 'id')]
    private ?Users $createBy = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createAt = null;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getDocDate(): ?\DateTimeInterface
    {
        return $this->docDate;
    }

    public function setDocDate(\DateTimeInterface $docDate): self
    {
        $this->docDate = $docDate;
        return $this;
    }

    public function getEmetteur(): ?Users
    {
        return $this->emetteur;
    }

    public function setEmetteur(?Users $emetteur): self
    {
        $this->emetteur = $emetteur;
        return $this;
    }

    public function getDestinataire(): ?Users
    {
        return $this->destinataire;
    }

    public function setDestinataire(?Users $destinataire): self
    {
        $this->destinataire = $destinataire;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getMontantHt(): ?float
    {
        return $this->montantHt;
    }

    public function setMontantHt(?float $montantHt): self
    {
        $this->montantHt = $montantHt;
        return $this;
    }

    public function getTauxTva(): ?int
    {
        return $this->tauxTva;
    }

    public function setTauxTva(?int $tauxTva): self
    {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    public function getMontantTva(): ?float
    {
        return $this->montantTva;
    }
    public function setMontantTva(?int $montantTva): self
    {
        $this->montantTva = $montantTva;
        $this->calculateMontantTva();
        return $this;
    }

    private function calculateMontantTva(): void
    {
        if ($this->montantHt !== null && $this->tauxTva !== null) {
            $this->montantTva = $this->montantHt * ($this->tauxTva / 100);
        }
    }

    public function getTimbre(): ?float
    {
        return $this->timbre;
    }

    public function setTimbre(?float $timbre): self
    {
        $this->timbre = $timbre;
        return $this;
    }

    public function getRetenu(): ?float
    {
        return $this->retenu;
    }

    public function setRetenu(?float $retenu): self
    {
        $this->retenu = $retenu;
        return $this;
    }

    public function getCreateBy(): ?Users
    {
        return $this->createBy;
    }

    public function setCreateBy(?Users $createBy): self
    {
        $this->createBy = $createBy;
        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;
        return $this;
    }
    #[ORM\OneToMany(targetEntity: Documentslignes::class, mappedBy: 'document')]
private Collection $lignes;

public function __construct()
{
    $this->lignes = new ArrayCollection();
}
    /**
 * @return Collection<int, Documentslignes>
 */
public function getLignes(): Collection
{
    return $this->lignes;
}

public function addLigne(Documentslignes $ligne): static
{
    if (!$this->lignes->contains($ligne)) {
        $this->lignes->add($ligne);
        $ligne->setDocument($this);
    }

    return $this;
}

public function removeLigne(Documentslignes $ligne): static
{
    if ($this->lignes->removeElement($ligne)) {
        // set the owning side to null (unless already changed)
        if ($ligne->getDocument() === $this) {
            $ligne->setDocument(null);
        }
    }

    return $this;
}
}