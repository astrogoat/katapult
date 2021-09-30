<?php

namespace Astrogoat\Katapult\Settings;

use Helix\Lego\Settings\AppSettings;

class KatapultSettings extends AppSettings
{
    public string $public_key;
    public string $environment;

    protected array $rules = [
        'public_key' => ['required'],
        'environment' => ['required'],
    ];

    public function environmentOptions(): array
    {
        return [
            'https://sandbox.katapult.com' => 'Sandbox',
            'https://katapult.com' => 'Production',
        ];
    }

    public function help(): array
    {
        return [
            'public_key' => 'The API key provided to you by Katapult.',
            'environment' => 'Whether to use the sandbox or production environment.',
        ];
    }

    public function description(): string
    {
        return 'Don’t let the price tag win. The new way to pay, for everyday people.';
    }
}
