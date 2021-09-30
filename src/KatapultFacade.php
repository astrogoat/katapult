<?php

namespace Astrogoat\Katapult;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Katapult\Katapult
 */
class KatapultFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'katapult';
    }
}
