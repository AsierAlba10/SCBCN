<?php

namespace Deg540\DockerPHPBoilerplate\Sponsor\Tests\Core\Application;

use Deg540\DockerPHPBoilerplate\Sponsor\Core\Application\SendConfirmationEmailToSponsor\SendConfirmationEmailToSponsorService;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Mailer;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\Sponsor;
use Deg540\DockerPHPBoilerplate\Sponsor\Core\Domain\SponsorRepository;
use Mockery;
use PHPUnit\Framework\TestCase;

class SendConfirmationEmailToSponsorServiceTest extends TestCase
{
    private readonly SponsorRepository $sponsorRepository;
    private readonly Mailer $mailer;
    private readonly SendConfirmationEmailToSponsorService $sendConfirmationEmailToSponsorService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sponsorRepository = Mockery::mock(SponsorRepository::class);
        $this->mailer = Mockery::mock(Mailer::class);
        $this->sendConfirmationEmailToSponsorService = new SendConfirmationEmailToSponsorService($this->sponsorRepository, $this->mailer);
    }

    /**
     * @test
     */
    public function confirmationEmailIsSentToSponsor(): void
    {
        $sponsorId = 1;
        $sponsor = $this->getSponsor($sponsorId);
        $expectedSponsor = $this->getSponsor($sponsorId);

        $this->sponsorRepository->expects('ofId')->with($sponsorId)->andReturn($sponsor);
        $this->mailer->expects('sendConfirmationEmail')->with($sponsor);

        $sponsor = $this->sendConfirmationEmailToSponsorService->execute($sponsorId);

        $this->assertEquals($expectedSponsor, $sponsor);
    }

    private function getSponsor(int $sponsorId): Sponsor
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
