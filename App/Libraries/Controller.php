<?php

namespace App\Libraries;

class Controller
{

  // load Model

  public function notFoundMethod()
  {
    $this->view("notFound");
  }

  public function model($model)
  {
    // require model file;
    require_once '../App/Models/' . $model . '.php';
    $model = '\App\Models\\' . $model;
    return new $model();
  }


  public function view($view, $data = [])
  {
    if (file_exists('../App/Views/' . $view . '.php')) {
      require_once '../App/Views/' . $view . '.php';
    } else {
      die('View does not exist');
    }
  }
}
