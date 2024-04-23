<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DistributeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Distributeur
 */
#[ORM\Entity(repositoryClass: DistributeurRepository::class)]
#[ApiResource]
class Distributeur
{
    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var ArrayCollection
     */
    #[ORM\ManyToMany(targetEntity:Produit::class, mappedBy:'distributeurs')]
    private $produits = null;

    /**
     * Constructor Distributeur
     */
    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return $this
     */
    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    /**
     * @param Produit $produit
     * @return $this
     */
    public function addProduit(Produit $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->addDistributeur($this);
        }

        return $this;
    }

    /**
     * @param Produit $produit
     * @return $this
     */
    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            $produit->removeDistributeur($this);
        }

        return $this;
    }
}
