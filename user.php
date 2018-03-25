<?php
class User
{
  private $name;
  private $address;
  private $email;

  public function __construct (
                  string $name,
                  string $address,
                  string $email
                              )
  {
    $this->name     = $name;
    $this->address  = $address;
    $this->email    = $email;
  }

  public function getName():string
  {
    return $this->name;
  }

  public function getAddress():string
  {
    return $this->address;
  }

  public function getEmail():string
  {
    return $this->email;
  }
}
 ?>
