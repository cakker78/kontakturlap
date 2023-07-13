<?php

namespace App\Entity;

use App\Repository\KontakturlapRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[ORM\Entity(repositoryClass: KontakturlapRepository::class)]
class Kontakturlap
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    /**
    * @Assert\NotBlank(
        * message = "Hiba! Kérjük töltsd ki az összes mezőt!", 
        * )
    */
    private ?string $urlapNev = null;

    #[ORM\Column(length: 255)]
    /**
    * @Assert\NotBlank(
        * message = "Hiba! Kérjük töltsd ki az összes mezőt!", 
        * )
    */
    private ?string $urlapEmail = null;

    #[ORM\Column(type: Types::TEXT)]
    /**
    * @Assert\NotBlank(
        * message = "Hiba! Kérjük töltsd ki az összes mezőt!", 
        * )
    */
    private ?string $urlapUzenet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlapNev(): ?string
    {
        return $this->urlapNev;
    }

    public function setUrlapNev(string $urlapNev): static
    {
        $this->urlapNev = $urlapNev;

        return $this;
    }

    public function getUrlapEmail(): ?string
    {
        return $this->urlapEmail;
    }

    public function setUrlapEmail(string $urlapEmail): static
    {
        $this->urlapEmail = $urlapEmail;

        return $this;
    }

    public function getUrlapUzenet(): ?string
    {
        return $this->urlapUzenet;
    }

    public function setUrlapUzenet(string $urlapUzenet): static
    {
        $this->urlapUzenet = $urlapUzenet;

        return $this;
    }
}
