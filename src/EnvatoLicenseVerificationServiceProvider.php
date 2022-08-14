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
            ->hasViews()
            ->hasMigration('create_envato-license-verification_table')
            ->hasCommand(EnvatoLicenseVerificationCommand::class);
    }
}
