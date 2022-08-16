<?php

namespace Mprince2k18\EnvatoLicenseVerification;

use Mprince2k18\EnvatoLicenseVerification\Commands\EnvatoLicenseVerificationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EnvatoLicenseVerificationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('envato-license-verification')
            ->hasConfigFile()
            // ->hasViews() // uncomment if you want to use views
            // ->hasMigration('create_envato-license-verification_table') // uncomment if you need a migration
            ->hasRoute('envato')
            ->hasCommand(EnvatoLicenseVerificationCommand::class);
    }

    // ENDS
}
