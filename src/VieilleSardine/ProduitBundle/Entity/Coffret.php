<?php

namespace VieilleSardine\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coffret
 *
 * @ORM\Table(name="coffret")
 * @ORM\Entity(repositoryClass="VieilleSardine\ProduitBundle\Entity\CoffretRepository")
 */
class Coffret
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_coffret", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoffret;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", nullable=false)
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(name="hauteur", type="float", nullable=false)
     */
    private $hauteur;

    /**
     * @var float
     *
     * @ORM\Column(name="longueur", type="float", nullable=false)
     */
    private $longueur;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur", type="float", nullable=false)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_produit", type="integer", nullable=false)
     */
    private $nbProduit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", inversedBy="idCoffret")
     * @ORM\JoinTable(name="composition_coffret",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_coffret", referencedColumnName="id_coffret")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     *   }
     * )
     */
    private $idProduit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduit = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idCoffret
     *
     * @return integer 
     */
    public function getIdCoffret()
    {
        return $this->idCoffret;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Coffret
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return Coffret
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    
        return $this;
    }

    /**
     * Get poids
     *
     * @return float 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set hauteur
     *
     * @param float $hauteur
     * @return Coffret
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    
        return $this;
    }

    /**
     * Get hauteur
     *
     * @return float 
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set longueur
     *
     * @param float $longueur
     * @return Coffret
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    
        return $this;
    }

    /**
     * Get longueur
     *
     * @return float 
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     * @return Coffret
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    
        return $this;
    }

    /**
     * Get largeur
     *
     * @return float 
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Coffret
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbProduit
     *
     * @param integer $nbProduit
     * @return Coffret
     */
    public function setNbProduit($nbProduit)
    {
        $this->nbProduit = $nbProduit;
    
        return $this;
    }

    /**
     * Get nbProduit
     *
     * @return integer 
     */
    public function getNbProduit()
    {
        return $this->nbProduit;
    }

    /**
     * Add idProduit
     *
     * @param \VieilleSardine\ProduitBundle\Entity\Produit $idProduit
     * @return Coffret
     */
    public function addIdProduit(\VieilleSardine\ProduitBundle\Entity\Produit $idProduit)
    {
        $this->idProduit[] = $idProduit;
    
        return $this;
    }

    /**
     * Remove idProduit
     *
     * @param \VieilleSardine\ProduitBundle\Entity\Produit $idProduit
     */
    public function removeIdProduit(\VieilleSardine\ProduitBundle\Entity\Produit $idProduit)
    {
        $this->idProduit->removeElement($idProduit);
    }

    /**
     * Get idProduit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}