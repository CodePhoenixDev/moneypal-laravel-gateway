<?php

namespace Moneypal\Gateway\Facades;

use Illuminate\Support\Facades\Facade;

class Moneypal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moneypal';
    }
}

