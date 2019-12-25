<?php
namespace InFormTiez\TiezLaravelInstamojo;

use Illuminate\Support\ServiceProvider;

class InstamojoServiceProvider extends ServiceProvider{

	/**
    * Bootstrap services.
    *
    * @return void
    */
	public function boot(){

		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
	}

	/**
    * Register services.
    *
    * @return void
    */
	public function register(){

		// register our controller
		$this->app->make('InFormTiez\TiezLaravelInstamojo\Http\Controllers\InstamojoController');
	}
}
