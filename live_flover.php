<?php
  class Live_flover extends Flover {
    private $box;
    private $fresh;

    public function __constructor ($box, $fresh) {
      $this->box = $box;
      $this->fresh = $fresh;
    }
  }
?>
