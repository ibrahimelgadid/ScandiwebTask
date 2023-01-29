<?php

namespace App\Products;



class FURNITURE extends ProductINF
{

  private $width;
  private $height;
  private $length;

  public function __construct($data, $model)
  {


    parent::__construct($data, $model);

    $this->width =  $data['width'];
    $this->height =  $data['height'];
    $this->length =  $data['length'];
  }

  public function setAttribute()
  {

    if (empty($this->width)) {
      $this->attributes_err['width_err'] = "Width is required";
    }
    if (empty($this->height)) {
      $this->attributes_err['height_err'] = "height is required";
    }
    if (empty($this->length)) {
      $this->attributes_err['length_err'] = "length is required";
    }

    if (count($this->attributes_err) > 0) {
      return ['errors' => $this->attributes_err];
    } else {
      return  [
        'sku' => $this->sku,
        'name' => $this->name,
        'price' => $this->price,
        'type' => $this->type,
        'attribute' => "Dimension: " . $this->height . "x" . $this->width . 'x' . $this->length,
      ];
    }
  }
}
