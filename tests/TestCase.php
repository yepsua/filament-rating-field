<?php

namespace Yepsua\Filament\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Yepsua\Filament\FilamentRatingFieldServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentRatingFieldServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-rating-field_table.php.stub';
        $migration->up();
        */
    }
}
