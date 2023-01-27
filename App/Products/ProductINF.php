<?php

namespace App\Products;

abstract class ProductINF
{
  protected $sku;
  protected $name;
  protected $price;
  protected $type;
  protected $attributes_err = [];


  public  function __construct($data, $model)
  {
    $this->sku = $data['sku'];
    $this->name =  $data['name'];
    $this->price =  $data['price'];
    $this->type =  $data['type'];

    //  validate sku
    if (empty($this->sku)) {
      $this->attributes_err['sku_err'] = "sku is required";
    }

    if ($model->findBySKU($this->sku)) {
      $this->attributes_err['sku_err'] = "sku is already taken";
    }

    if (preg_match("/^([\w\d]{3})-([\w\d]{3})-([\w\d]{3})$/", $this->sku) === 0) {
      $this->attributes_err['sku_err'] = "incorrect sku";
    }

    // validate name
    if (empty($this->name)) {
      $this->attributes_err['name_err'] = "name is required";
    }

    // validate name
    if (empty($this->price)) {
      $this->attributes_err['price_err'] = "price is required";
    }
    if (!filter_var($this->price, FILTER_VALIDATE_INT) || $this->price < 1) {
      $this->attributes_err['price_err'] = "price is must be integer and bigger than 0";
    }
  }
}
