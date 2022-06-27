<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateKatapultSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('katapult.private_key', '')->after('katapult.public_key');
    }

    public function down()
    {
        $this->migrator->delete('katapult.private_key');
    }
}
