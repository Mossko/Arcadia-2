<?php

namespace App\entity;

class service
{
    protected ?int $service_id = null;
    protected ?string $nom = null;
    protected ?string $description = null;
    /**
     * Get the value of service_id
     */
    public function getServiceId(): ?int
    {
        return $this->service_id;
    }

    /**
     * Set the value of service_id
     */
    public function setServiceId(?int $service_id): self
    {
        $this->service_id = $service_id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
