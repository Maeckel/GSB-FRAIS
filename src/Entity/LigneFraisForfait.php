<?php

namespace App\Entity;

use App\Repository\LigneFraisForfaitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneFraisForfaitRepository::class)]
class LigneFraisForfait
{

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $quantite = null;
	
	#[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'LigneFraisForfait')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Visiteur $Visiteur = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FicheFrais $Fichefrais = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FraisForfait $Fraisforfait = null;

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(?string $quantite): self
    {
        $this->quantite = $quantite;

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

    public function getFraisforfait(): ?FraisForfait
    {
        return $this->Fraisforfait;
    }

    public function setFraisforfait(?FraisForfait $Fraisforfait): self
    {
        $this->Fraisforfait = $Fraisforfait;

        return $this;
    }

}
