<?php

namespace App\Composers;

use Illuminate\View\View;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class CurrentUserComposer
{
  public function compose(View $view)
  {
    $view->with('currentUser', Auth::user());
  }
}