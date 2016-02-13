<?php

namespace Petty\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Hashids extends Facade
{
    protected static function getFacadeAccessor() { return 'hashids'; }
}