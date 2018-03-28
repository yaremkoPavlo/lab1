<?php
namespace product;

class CharacteristicFlowerRose implements iCharacteristic
{
    private $color;
    private $roseLength;
    private $hasSpike;

    public function __construct(string $color, int $roseLength, bool $hasSpike = false)
    {
        $this->color = $color;
        $this->roseLength = $roseLength;
        $this->hasSpike = $hasSpike;
    }

    public function getCharacteristic():array
    {
        $infoArray = Array  (
            'color'      => $this->color,
            'roseLength' => $this->roseLength,
            'hasSpike'   => $this->hasSpike
                            );
        return $infoArray;
    }
}
