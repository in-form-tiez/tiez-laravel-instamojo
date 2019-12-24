<?php 
namespace InFormTiez\Tiezlaravelinstamojo;

class InstamojoServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
        // register our controller
        $this->app->make('InFormTiez\Tiezlaravelinstamojo\Http\Controllers\InstamojoController');
    }
}
