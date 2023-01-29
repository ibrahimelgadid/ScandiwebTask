<?php

namespace App\Controllers;

use App\Libraries\Controller;
use App\Helpers\Location;


class Products extends Controller
{
  private $productModel;

  public function __construct()
  {
    $this->productModel = $this->model("product");
  }

  public function index()
  {
    $products = $this->productModel->getProducts();
    $this->view('products/index', $products);
  }



  public function create()
  {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

      $type = "\App\Products\\" . $_POST['type'];
      $type = new $type($_POST, $this->productModel);
      $data = $type->setAttribute();

      if (array_key_exists('errors', $data)) {
        $this->view('products/create', array_merge($data['errors'], $_POST));
      } else {
        $this->productModel->insertProduct($data);
        Location::redirect('products');
      }
    } else {

      $this->view('products/create');
    }
  }


  public function delete()
  {

    foreach ($_POST['sku'] as $product) {
      $this->productModel->deleteSelectedProduct($product);
    }
    Location::redirect('');
  }
}
