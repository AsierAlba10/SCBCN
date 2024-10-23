<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Tests\Core\Domain;

use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Sponsor;

class SponsorTestDataBuilder
{
    private function __construct(
        private readonly int $sponsorId,
        private readonly string $name,
        private readonly string $sponsorshipName,
        private readonly string $email,
        private readonly bool $hasPaid,
    ) {
    }

    public static function aSponsor($sponsorId = 1): SponsorTestDataBuilder
    {
        return new self(
            $sponsorId,
            '🔝5️⃣4️⃣0️⃣🔝️',
            '🦄Patrocinio PonIA 2024🦄',
            'contacto@540deg.com',
            true,
        );
    }

    public function build(): Sponsor
    {
        return new Sponsor(
            $this->sponsorId,
            $this->name,
            $this->sponsorshipName,
            $this->email,
            $this->hasPaid,
        );
    }
}
