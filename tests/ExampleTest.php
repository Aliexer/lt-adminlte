<?php

namespace LaravelTemplate\LtAdminlte\Tests;

use Orchestra\Testbench\TestCase;
use LaravelTemplate\LtAdminlte\LtAdminlteServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LtAdminlteServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
