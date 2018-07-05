<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 15:59
 */

namespace BinaryStudioAcademy\Game\Parts;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractPart;
class Launcher extends AbstractPart
{

    public function __construct()
    {
        $this->namePart = 'Launcher';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'water',
            'fire',
            'fuel',
        ];
    }

}