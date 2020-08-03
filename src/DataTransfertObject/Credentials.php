<?php

namespace App\DataTransfertObject;

use Symfony\Component\Validator\Constraints as Assert;

class Credentials
{
    /**
     * @var string|null
     * Assert\NotBlank
     */
    private $username;

    /**
     * @var string|null
     * Assert\NotBlank
     */
    private $password;

    public function __construct(?string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
}