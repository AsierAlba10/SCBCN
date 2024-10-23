<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain;

interface Mailer
{
    public function sendConfirmationEmail(Sponsor $sponsor): void;
}
