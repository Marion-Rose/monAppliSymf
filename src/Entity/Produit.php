<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as AcmeAssert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Class Produit
 */
#[ORM\Entity(repositoryClass: ProduitRepository::class),
    UniqueEntity(fields:"nom",message:"erreur produit déjà existant dans la base",groups:["registration"])]
#[ApiResource]
class Produit
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
    #[ORM\Column(length: 200)]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Votre nom doit faire au moins {{ limit }} caractères',
        maxMessage: 'Votre nom ne doit pas dépasser {{ limit }} caractères',
        groups: ["all"]
    )]
    #[AcmeAssert\Antispam(
        groups: ["all"]
    )]
    private ?string $nom = null;

    /**
     * @var float|null
     */
    #[ORM\Column]
    private ?float $prix = null;

    /**
     * @var int|null
     */
    #[ORM\Column]
    private ?int $quantite = null;

    /**
     * @var bool|null
     */
    #[ORM\Column]
    private ?bool $rupture = null;

    /**
     * @var string|null
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lienImage = null;

    /**
     * @var Reference|null
     */
    #[ORM\OneToOne(inversedBy: 'produit', cascade: ['persist', 'remove'], fetch: "EAGER")]
    private ?Reference $reference = null;

    /**
     * @var ArrayCollection
     */
    #[ORM\ManyToMany(targetEntity:Distributeur::class, cascade:["persist"], inversedBy: 'produits')]
    private $distributeurs = null;

    /**
     * Constructor Produit
     */
    public function __construct()
    {
        $this->distributeurs = new ArrayCollection();
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
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     * @return $this
     */
    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     * @return $this
     */
    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isRupture(): ?bool
    {
        return $this->rupture;
    }

    /**
     * @param bool $rupture
     * @return $this
     */
    public function setRupture(bool $rupture): static
    {
        $this->rupture = $rupture;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLienImage(): ?string
    {
        return $this->lienImage;
    }

    /**
     * @param string|null $lienImage
     * @return $this
     */
    public function setLienImage(?string $lienImage): static
    {
        $this->lienImage = $lienImage;

        return $this;
    }

    /**
     * @return Reference|null
     */
    public function getReference(): ?Reference
    {
        return $this->reference;
    }

    /**
     * @param Reference $reference
     * @return $this
     */
    public function setReference(Reference $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return Collection<int, Distributeur>
     */
    public function getDistributeurs(): Collection
    {
        return $this->distributeurs;
    }

    /**
     * @param Distributeur $distributeur
     * @return $this
     */
    public function addDistributeur(Distributeur $distributeur): static
    {
        if (!$this->distributeurs->contains($distributeur)) {
            $this->distributeurs->add($distributeur);
                // prise en compte de la relation inverse :  
            $distributeur->addProduit($this); 
        }

        return $this;
    }

    /**
     * @param Distributeur $distributeur
     * @return $this
     */
    public function removeDistributeur(Distributeur $distributeur): static
    {
        $this->distributeurs->removeElement($distributeur);

        return $this;
    }

    /**
     * @return bool
     */
    #[Assert\IsTrue(message:"Erreur valeurs négatives sur le prix ou la quantité")]
    public function isPrixQuantiteValid()
    {
        if (is_float($this->getPrix()) &&
            (is_int($this->getQuantite()))
            && ($this->getPrix() > 0) && ($this->getQuantite() > 0)) {

            return true;

        } else {

            return false;

        }

    }

    /**
     * @param ExecutionContextInterface $context
     * @return void
     */
    #[Assert\Callback()]
    public function isContentValid(ExecutionContextInterface $context)
    {
        $forbiddenWords= array('arme','médicament','drogue');

        if(preg_match('#'.implode('|',$forbiddenWords).'#i', $this->getNom())){

            $context->buildViolation('Le produit est interdit à la vente')
                ->atPath('produit')
                ->addViolation();
        }

    }

}
