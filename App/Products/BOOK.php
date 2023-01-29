<?php

namespace App\Products;



class Book extends ProductINF
{

  private $weight;

  public function __construct($data, $model)
  {


    parent::__construct($data, $model);

    $this->weight =  $data['weight'];
  }

  public function setAttribute()
  {

    if (empty($this->weight)) {
      $this->attributes_err['weight_err'] = "weight is required";
    }


    if (count($this->attributes_err) > 0) {
      return ['errors' => $this->attributes_err];
    } else {
      return  [
        'sku' => $this->sku,
        'name' => $this->name,
        'price' => $this->price,
        'type' => $this->type,
        'attribute' => 'Weight: ' . $this->weight . ' KG',
      ];
    }
  }
}
