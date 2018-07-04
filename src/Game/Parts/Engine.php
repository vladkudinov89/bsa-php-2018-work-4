<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 18:16
 */

namespace BinaryStudioAcademy\Game\Parts;


class Engine extends AbstractPart
{
    public function __construct()
    {
        $this->namePart = 'Engine';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'metal',
            'carbon',
            'fire'
        ];
    }

}