<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Exceptions;

use Exception;

class SponsorNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('❌🦄Patrocinador no ha sido encontrado 🦄❌');
    }
}
