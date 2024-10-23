<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain;

class Sponsor
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $sponsorshipName,
        private readonly string $email,
        private readonly bool $hasPaid,
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function hasPaid(): bool
    {
        return $this->hasPaid;
    }

    public function hasEmailAddress(): bool
    {
        return !empty($this->email);
    }
}
