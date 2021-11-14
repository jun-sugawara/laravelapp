<?php
namespace App\Http\composers;

use Illuminate\View\View;

class HelloComposer{

  public function compose(View $view){
    $view->with('view_message', 'this view is"'. $view->getName(). '"!!');
  }
}