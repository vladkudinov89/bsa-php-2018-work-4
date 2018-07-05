<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 03.07.18
 * Time: 18:57
 */

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;

class Iron extends AbstractResource
{

    public function __construct()
    {
        $this->name = 'Iron';
        $this->count = 2;
    }


}