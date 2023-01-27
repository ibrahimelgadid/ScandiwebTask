<?php

namespace App\Controllers;

use App\Libraries\Controller;


class NotFound extends Controller
{


  public function index()
  {

    $this->view('notFound');
  }
}
