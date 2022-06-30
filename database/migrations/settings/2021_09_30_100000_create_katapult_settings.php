<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateKatapultSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('katapult.enabled', false);
        $this->migrator->add('katapult.public_key', '');
        $this->migrator->add('katapult.environment', 'https://sandbox.katapult.com');
    }

    public function down()
    {
        $this->migrator->delete('katapult.enabled');
        $this->migrator->delete('katapult.public_key');
        $this->migrator->delete('katapult.environment');
    }
}
