<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SqliteDatabaseProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $sqliteFile = config('database.connections.sqlite.database');

        info(config('database.default'));
        info($sqliteFile);

        if (config('database.default') === 'sqlite' && !file_exists($sqliteFile)) {
            info('Create sqlite database');
            file_put_contents($sqliteFile, '');
        }
    }
}
