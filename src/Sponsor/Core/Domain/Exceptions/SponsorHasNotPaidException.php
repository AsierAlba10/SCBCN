<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Exceptions;

use Exception;

class SponsorHasNotPaidException extends Exception
{
    public function __construct()
    {
        parent::__construct('❌💶El patrocinador no ha pagado💶❌');
    }
}
