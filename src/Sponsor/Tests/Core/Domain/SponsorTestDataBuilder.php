<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Tests\Core\Domain;

use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Sponsor;

class SponsorTestDataBuilder
{
    public static function build(int $sponsorId = 1): Sponsor
    {
        return new Sponsor(
            $sponsorId,
            '🔝5️⃣4️⃣0️⃣🔝️',
            '🦄Patrocinio PonIA 2024🦄',
            'contacto@540deg.com',
            true,
        );
    }
}
