<?php
namespace App\CustomClasses;
class Speaker
{
  public $name;
  public $designation;
  public $link;
  public $imgPath;
  public function __construct(
    $name,
    $designation,
    $link,
    $imgPath
  ) {
    $this->name = $name;
    $this->designation = $designation;
    $this->link = $link;
    $this->imgPath = $imgPath;
  }
}