<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 16:00
 */

namespace BinaryStudioAcademy\Game\Parts;


class Tank extends AbstractPart
{

    public function __construct()
    {
        $this->namePart = 'Tank';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'metal',
            'fuel'
        ];
    }

}