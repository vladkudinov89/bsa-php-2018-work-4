<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 19:11
 */

namespace BinaryStudioAcademy\Game\Parts;
use BinaryStudioAcademy\Game\AbstractClasses\AbstractPart;

class ControlUnit extends AbstractPart
{

    public function __construct()
    {
        $this->namePart = 'Controlunit';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'iron',
            'fire',
            'silicon',
            'copper',
            'wires'
        ];
    }

}