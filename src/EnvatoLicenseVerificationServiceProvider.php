<?php

namespace Mprince2k18\EnvatoLicenseVerification;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mprince2k18\EnvatoLicenseVerification\Commands\EnvatoLicenseVerificationCommand;

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
            ->hasViews()
            ->hasMigration('create_envato-license-verification_table')
            ->hasCommand(EnvatoLicenseVerificationCommand::class);
    }
}
