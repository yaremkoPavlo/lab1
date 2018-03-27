<?php
require_once ('iCharacteristic.php');

class CharacteristicFlowerChamomile implements iCharacteristic
{
    private $color;
    private $smell;

    public function __construct(string $color = 'white', bool $smell = true)
    {
        $this->color = $color;
        $this->smell = $smell;
    }

    public function getCharacteristic(): array
    {
        $infoArray = Array ('color' => $this->color, 'smell' => $this->smell);
        return $infoArray;
    }

}