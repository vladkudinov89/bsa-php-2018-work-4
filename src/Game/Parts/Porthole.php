<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 15:59
 */

namespace BinaryStudioAcademy\Game\Parts;


class Porthole extends AbstractPart
{

    public function __construct()
    {
        $this->namePart = 'Porthole';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'sand',
            'fire'
        ];
    }

}