<?php
namespace InFormTiez\TiezLaravelInstamojo;

use Illuminate\Support\ServiceProvider;

class InstamojoServiceProvider extends ServiceProvider{

	public function boot(){

		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
	}

	public function register(){

	}
}