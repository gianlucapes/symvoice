<?php

namespace App\Entity;

use App\Repository\InvoiceLinesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoiceLinesRepository::class)
 */
class InvoiceLines
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=invoice::class, cascade={"persist", "remove"})
     *  @ORM\Column(name="id_invoice", type="integer", nullable=true)
     */
    private $id_invoice;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $amount;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $quantity;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $iva;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $total_amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInvoice(): ?invoice
    {
        return $this->id_invoice;
    }

    public function setIdInvoice($id_invoice): self
    {
        $this->id_invoice = $id_invoice;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getIva(): ?string
    {
        return $this->iva;
    }

    public function setIva(string $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->total_amount;
    }

    public function setTotalAmount(string $total_amount): self
    {
        $this->total_amount = $total_amount;

        return $this;
    }
}
