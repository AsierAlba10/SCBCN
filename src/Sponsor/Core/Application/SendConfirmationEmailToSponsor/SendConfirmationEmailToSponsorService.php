<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Core\Application\SendConfirmationEmailToSponsor;

use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Exceptions\SponsorHasNotPaidException;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Exceptions\SponsorNotFoundException;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Mailer;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Sponsor;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\SponsorRepository;

class SendConfirmationEmailToSponsorService
{
    public function __construct(private readonly SponsorRepository $sponsorRepository, private readonly Mailer $mailer)
    {
    }

    /**
     * @throws SponsorNotFoundException
     * @throws SponsorHasNotPaidException
     */
    public function execute(int $sponsorId): Sponsor
    {
        $sponsor = $this->sponsorRepository->ofId($sponsorId);

        if (!$sponsor->hasPaid()) {
            throw new SponsorHasNotPaidException();
        }

        $this->mailer->sendConfirmationEmail($sponsor);

        return $sponsor;
    }
}
