<?php

namespace App\CustomClasses;

class Tour
{
  public $name;
  public $imgName;
  public $locDetails;
 
  public function __construct(
    $name,
    $imgName,
    $locDetails
  ) {
    $this->name = $name;
    $this->imgName = $imgName;
    $this->locDetails = $locDetails;
  }
}