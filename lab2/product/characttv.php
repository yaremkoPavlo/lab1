<?php
require_once('iCharacteristic.php');

class CharactTV implements iCharacteristic
{
  private $producer;
  private $screenSize;
  private $screenResolution;
  private $smart;

  public function __construct (
                  string $producer,
                  int    $screenSize,
                  string $screenResolution,
                  bool   $smart
                              )
  {
    $this->producer         = $producer;
    $this->screenSize       = $screenSize;
    $this->screenResolution = $screenResolution;
    $this->smart            = $smart;
  }

  public function getCharacteristic():array
  {
    $infoArray = Array (
      "producer"         => $this->producer,
      "screenSize"       => $this->screenSize,
      "screenResolution" => $this->screenResolution,
      "smart"            => $this->smart
                      );
    return $infoArray;
  }
}
 ?>
