<?php

namespace Rakshitbharat\DatabaseDictionary\Tests;

use Orchestra\Testbench\TestCase;
use Rakshitbharat\DatabaseDictionary\DatabaseDictionaryServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DatabaseDictionaryServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
