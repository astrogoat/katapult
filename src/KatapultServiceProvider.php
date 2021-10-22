<?php

namespace Astrogoat\Katapult;

use Astrogoat\Katapult\Settings\KatapultSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KatapultServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('katapult')
            ->settings(KatapultSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(function (App $app) {
                return $this->registerApp($app);
            });
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('katapult')
            ->hasViews();
    }
}
