<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain;

use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Exceptions\SponsorNotFoundException;

interface SponsorRepository
{
    /**
     * @throws SponsorNotFoundException
     */
    public function ofId(int $sponsorId): Sponsor;
}
