<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatRepository::class)]
class Etat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?string $id = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $libelle = null;

    #[ORM\OneToMany(mappedBy: 'Etat', targetEntity: FicheFrais::class)]
    private Collection $FicheFrais;

    public function __construct()
    {
        $this->FicheFrais = new ArrayCollection();
    }

    public function getId(): ?string
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

    /**
     * @return Collection<int, FicheFrais>
     */
    public function getFicheFrais(): Collection
    {
        return $this->FicheFrais;
    }

    public function addFicheFrai(FicheFrais $ficheFrai): self
    {
        if (!$this->FicheFrais->contains($ficheFrai)) {
            $this->FicheFrais->add($ficheFrai);
            $ficheFrai->setEtat($this);
        }

        return $this;
    }

    public function removeFicheFrai(FicheFrais $ficheFrai): self
    {
        if ($this->FicheFrais->removeElement($ficheFrai)) {
            // set the owning side to null (unless already changed)
            if ($ficheFrai->getEtat() === $this) {
                $ficheFrai->setEtat(null);
            }
        }

        return $this;
    }
}
