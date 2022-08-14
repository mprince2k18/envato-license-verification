<?php

namespace Mprince2k18\EnvatoLicenseVerification\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mprince2k18\EnvatoLicenseVerification\EnvatoLicenseVerification
 */
class EnvatoLicenseVerification extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mprince2k18\EnvatoLicenseVerification\EnvatoLicenseVerification::class;
    }
}
