<?php
/*
 * This file is part of the devscast Project.
 *
 * (c) Bernard Ng <ngandubernard@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domain\User\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Domain\User\Repository\UserRepository")
 * @UniqueEntity("email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=180)
     * @Assert\NotBlank()
     */
    private ?string $username = null;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private ?string $email = null;

    /**
     * @ORM\Column(type="string")
     */
    private ?string $roles = null;

    /**
     * @ORM\Column(type="string")
     */
    private ?string $password = null;

    /**
     * @return string
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function __toString()
    {
        return $this->getUsername();
    }

    /**
     * @return int|null
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param string $username
     * @return $this
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string|null
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = explode('|', "ROLE_USER|{$this->roles}");
        return array_unique($roles);
    }

    /**
     * @param array $roles
     * @return $this
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function setRoles(array $roles): self
    {
        $this->roles = implode('|', $roles);
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string)$this->password;
    }

    /**
     * @param string $password
     * @return $this
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
