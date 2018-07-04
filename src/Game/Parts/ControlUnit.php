<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 19:11
 */

namespace BinaryStudioAcademy\Game\Parts;


class ControlUnit extends AbstractPart
{

    public function __construct()
    {
        $this->namePart = 'ControlUnit';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'IC',
            'Wires'
        ];
    }

}