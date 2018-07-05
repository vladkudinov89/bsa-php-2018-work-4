<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 17:45
 */

namespace BinaryStudioAcademy\Game\AbstractClasses;

use BinaryStudioAcademy\Game\Contracts\iParts\Parts;

abstract class AbstractPart implements Parts
{

    public $namePart ;
    public $resourceNeed;
    public $isPartExist;


}