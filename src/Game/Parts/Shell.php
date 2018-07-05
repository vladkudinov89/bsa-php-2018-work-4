<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 18:06
 */

namespace BinaryStudioAcademy\Game\Parts;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractPart;

class Shell extends AbstractPart
{

    public function __construct()
    {
        $this->namePart = 'Shell';
        $this->isPartExist = 0;
        $this->resourceNeed = [
            'metal',
            'fire'
        ];
    }

}