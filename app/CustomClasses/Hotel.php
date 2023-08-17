<?php

namespace App\CustomClasses;

class Hotel
{
  public $name;
  public $email;
  public $noOfStars;
  public $minPrice;
  public $maxPrice;
  public $website;
  public $distance;
  public $locationLabel;
  public $phoneNumber1;
  public $phoneNumber2;
  public $imgPath;
  public function __construct(
    $name,
    $email,
    $noOfStars,
    $minPrice,
    $maxPrice,
    $website,
    $distance,
    $locationLabel,
    $phoneNumber1,
    $phoneNumber2,
    $imgPath
  ) {
    $this->name = $name;
    $this->email = $email;
    $this->noOfStars = $noOfStars;
    $this->minPrice = $minPrice;
    $this->maxPrice = $maxPrice;
    $this->website = $website;
    $this->distance = $distance;
    $this->locationLabel = $locationLabel;
    $this->phoneNumber1 = $phoneNumber1;
    $this->phoneNumber2 = $phoneNumber2;
    $this->imgPath = $imgPath;
  }
}