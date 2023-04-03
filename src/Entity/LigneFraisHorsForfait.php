<?php

namespace App\Entity;

use App\Repository\LigneFraisHorsForfaitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneFraisHorsForfaitRepository::class)]
class LigneFraisHorsForfait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $montant = null;

    #[ORM\ManyToOne(inversedBy: 'ligneFraisHorsForfaits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Visiteur $Visiteur = null;

    #[ORM\ManyToOne(inversedBy: 'ligneFraisHorsForfaits', targetEntity: FicheFrais::class)]
    private ?FicheFrais $Fichefrais = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->Visiteur;
    }

    public function setVisiteur(?Visiteur $Visiteur): self
    {
        $this->Visiteur = $Visiteur;

        return $this;
    }

    public function getFichefrais(): ?FicheFrais
    {
        return $this->Fichefrais;
    }

    public function setFichefrais(?FicheFrais $Fichefrais): self
    {
        $this->Fichefrais = $Fichefrais;

        return $this;
    }

}
