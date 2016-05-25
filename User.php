<?php

class User {

  public function __construct($name)
  {
    $this->name = $name;
  }
  
  public function name()
  {
    return $this->name;
  }
}
