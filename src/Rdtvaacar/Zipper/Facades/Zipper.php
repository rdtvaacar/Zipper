<?php

namespace Rdtvaacar\Zipper\Facades;

use Illuminate\Support\Facades\Facade;

class Zipper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zipper';
    }
}