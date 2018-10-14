<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Services\HelloService;

class HelloServiceProvider extends ServiceProvider
{

	public function register()
    {
        $this->app->bind(HelloService::class, function ($app) {
        	return new HelloService();
        });
    }
}