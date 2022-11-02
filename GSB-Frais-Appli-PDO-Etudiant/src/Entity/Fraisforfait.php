<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FraisforfaitRepository;

/**
 * Fraisforfait
 *
 * @ORM\Table(name="FraisForfait")
 * @ORM\Entity(repositoryClass=FraisforfaitRepository::class)
 */
class Fraisforfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $montant;

    public function __toString() {
        return $this->id;
        return $this->libelle;
        return $this->montant;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
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

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }


}
