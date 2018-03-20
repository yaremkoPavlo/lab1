<?php
  class Live_flover extends Flover {
    private $box;
    private $fresh;

    public function __construct($name, $price, $box, $fresh) {
      parent:: __construct($name, $price);
      $this->box = $box;
      $this->fresh = $fresh;
    }
  }
?>
