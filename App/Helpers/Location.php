<?php


namespace App\Helpers;

class Location
{

  public static function redirect($location)
  {
    header('location: ' . URLROOT . "/" . $location);
  }
}
