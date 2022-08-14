<?php

namespace Mprince2k18\EnvatoLicenseVerification\Commands;

use Illuminate\Console\Command;

class EnvatoLicenseVerificationCommand extends Command
{
    public $signature = 'envato-license-verification';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
