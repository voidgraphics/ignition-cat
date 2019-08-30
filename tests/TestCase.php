<?php

namespace VoidGraphics\CatTab\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use VoidGraphics\CatTab\TabServiceProvider;

abstract class TestCase extends Orchestra
{

    protected function getPackageProviders($app)
    {
        return [
            TabServiceProvider::class,
        ];
    }
}
