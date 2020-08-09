<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Ip;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity
 * @ApiResource
 */
class Server
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $name;

    /***
     * @var ArrayCollection<int, Ip>
     * @ORM\OneToMany(targetEntity="App\Entity\Ip", mappedBy="server")
     */
    private Ip $ipV4s;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getIp(): Ip
    {
        return $this->ip;
    }

    public function setIp(Ip $ip): self
    {
        $this->ip = $ip;
        return $this;
    }
}
