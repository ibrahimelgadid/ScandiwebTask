<?php

namespace App\Products;



class DVD extends ProductINF
{

  private $size;

  public function __construct($data, $model)
  {


    parent::__construct($data, $model);

    $this->size =  $data['size'];
  }

  public function setAttribute()
  {

    if (empty($this->size)) {
      $this->attributes_err['size_err'] = "size is required";
    }


    if (count($this->attributes_err) > 0) {
      return ['errors' => $this->attributes_err];
    } else {
      return  [
        'sku' => $this->sku,
        'name' => $this->name,
        'price' => $this->price,
        'type' => $this->type,
        'attribute' => 'Size: ' . $this->size . ' MB',
      ];
    }
  }
}
