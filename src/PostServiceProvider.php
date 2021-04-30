<?php

namespace Bymega\BymegaPosts;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('calculator', function($app) {
        return new Calculator();
    });

    $this->mergeConfigFrom(__DIR__.'/config/config.php', 'bymegaposts');
  }

  public function boot()
  {
    if ($this->app->runningInConsole()) {

      $this->publishes([
        __DIR__.'/config/config.php' => config_path('bymegaposts.php'),
      ], 'config');

    }
  }
}