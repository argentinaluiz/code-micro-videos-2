<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Routing\Middleware\ThrottleRequests;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    
    protected function setUp()
    {
        parent::setUp();
        $this->withoutMiddleware(
            ThrottleRequests::class
        );
    }
}
