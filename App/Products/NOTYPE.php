<?php

namespace App\Products;

class NOTYPE extends ProductINF
{

  public function __construct($data, $model)
  {
    parent::__construct($data, $model);
    $this->type =  $data['type'];
  }

  public function setAttribute()
  {
    $this->attributes_err['type_err'] = "type is required";
    return ['errors' => $this->attributes_err];
  }
}
