<?php

namespace Astrogoat\Katapult;

use Astrogoat\Katapult\Settings\KatapultSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KatapultServiceProvider extends PackageServiceProvider
{
    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(function (App $app) {
                return $app
                    ->name('katapult')
                    ->bladeIncludes('footer', [
                        'katapult::footer',
                    ])
                    ->settings(KatapultSettings::class);
            })
            ->addMigrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
        });
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('katapult')
            ->hasViews();
    }
}
