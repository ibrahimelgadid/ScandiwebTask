<?php

namespace App\Libraries;


class Core
{


  protected $currentController = "Products";
  protected $currentMethod = "index";
  protected $params = [];

  public function __construct()
  {
    $url = $this->getUrl();

    if (isset($url[0]) && $url[0] != "") {
      if (file_exists("../App/Controllers/" . ucwords($url[0]) . ".php")) {
        $this->currentController = ucwords($url[0]);
        unset($url[0]);
      } else {
        $this->currentController = 'NotFound';
      }
    }
    require_once "../App/Controllers/" . $this->currentController . ".php";

    $this->currentController = '\App\Controllers\\' . $this->currentController;
    $this->currentController = new $this->currentController;
    if (isset($url[1])) {
      if (method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
      } else {
        $this->currentMethod = "notFoundMethod";
      }
    }

    // get parameters
    $this->params = $url ? array_values($url) : [];
    call_user_func_array([
      $this->currentController,
      $this->currentMethod
    ], $this->params);
  }

  public function getUrl()
  {
    if (isset($_GET['url'])) {
      $url = (trim($_GET['url'], '/'));
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode("/", $url, 4);

      return $url;
    }
  }
}
