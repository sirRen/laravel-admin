<?php

namespace Easy\Admin\Facades;
use Illuminate\Support\Facades\Facade;
class Admin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'admin';
    }
}
