<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandesRepository::class)
 */
class Commandes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="employe")
     */
    private $client;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeCommandes;

    /**
     * @ORM\Column(type="date")
     */
    private $dataDeLivraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destinataire;

    /**
     * @ORM\ManyToOne(targetEntity=Employes::class, inversedBy="commandes")
     */
    private $employe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getDateDeCommandes(): ?\DateTimeInterface
    {
        return $this->dateDeCommandes;
    }

    public function setDateDeCommandes(\DateTimeInterface $dateDeCommandes): self
    {
        $this->dateDeCommandes = $dateDeCommandes;

        return $this;
    }

    public function getDataDeLivraison(): ?\DateTimeInterface
    {
        return $this->dataDeLivraison;
    }

    public function setDataDeLivraison(\DateTimeInterface $dataDeLivraison): self
    {
        $this->dataDeLivraison = $dataDeLivraison;

        return $this;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire): self
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getEmploye(): ?Employes
    {
        return $this->employe;
    }

    public function setEmploye(?Employes $employe): self
    {
        $this->employe = $employe;

        return $this;
    }
}
