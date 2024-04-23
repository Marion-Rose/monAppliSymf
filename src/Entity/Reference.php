<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ReferenceRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Reference
 */
#[ORM\Entity(repositoryClass: ReferenceRepository::class)]
#[ApiResource]
class Reference
{
    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var int|null
     */
    #[ORM\Column]
    private ?int $numero = null;

    /**
     * @var Produit|null
     */
    #[ORM\OneToOne(mappedBy: 'reference', cascade: ['persist', 'remove'])]
    private ?Produit $produit = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return $this
     */
    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return Produit|null
     */
    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    /**
     * @param Produit $produit
     * @return $this
     */
    public function setProduit(Produit $produit): static
    {
        // set the owning side of the relation if necessary
        if ($produit->getReference() !== $this) {
            $produit->setReference($this);
        }

        $this->produit = $produit;

        return $this;
    }
}
