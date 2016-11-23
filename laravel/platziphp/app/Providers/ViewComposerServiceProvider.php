<?php

namespace App\Providers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;
use App\Composers\CurrentUserComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
  public function boot(Factory $factory)
  {
    $factory->composer('*', CurrentUserComposer::class);
  }

  public function register()
  {

  }
}