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
  }

  public function boot()
  {
    //
  }
}