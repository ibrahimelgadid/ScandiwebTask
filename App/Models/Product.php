<?php

namespace App\Models;

class Product
{
  private $db;

  public function __construct()
  {
    $this->db = new \App\Libraries\Database();
  }

  public function getProducts()
  {
    $this->db->query("SELECT * FROM products");
    return $this->db->resultSet();
  }

  public function findBySKU($sku)
  {
    $this->db->query("SELECT * FROM products WHERE sku=:sku");
    $this->db->bind(":sku", $sku);
    $this->db->single();

    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function insertProduct($productData)
  {

    $this->db->query(
      'INSERT INTO products (sku,name,price, type,attribute) VALUES (:sku,:name,:price, :type,:attribute)'
    );

    $this->db->bind(":sku", $productData['sku']);
    $this->db->bind(":name", $productData['name']);
    $this->db->bind(":price", $productData['price']);
    $this->db->bind(":type", $productData['type']);
    $this->db->bind(":attribute", $productData['attribute']);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function deleteSelectedProduct($selectedProduct)
  {

    $this->db->query(
      'DELETE FROM products WHERE sku = :selectedProduct'
    );

    $this->db->bind(":selectedProduct", $selectedProduct);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
