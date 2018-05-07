<?php

namespace Digitalmiig\Colegiomiig;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class ColegiomiigServiceProvider extends ServiceProvider
{
	
	 public function register()
	{
		$this->app->bind('colegiomiig', function($app) {
			return new Colegiomiig;

		});
	}

	public function boot()
	{
		require __DIR__ . '/Http/routes.php';


		$this->loadViewsFrom(__DIR__ . '/../views', 'colegiomiig');

		$this->publishes([

			__DIR__ . '/migrations/2015_07_25_000000_create_usuario_table.php' => base_path('database/migrations/2015_07_25_000000_create_usuario_table.php'),

			]);


	}

}
