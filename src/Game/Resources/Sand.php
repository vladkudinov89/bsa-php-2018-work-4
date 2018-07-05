<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 03.07.18
 * Time: 18:23
 */

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;

class Sand extends AbstractResource
{

    public function __construct()
    {
        $this->name = 'Sand';
        $this->count = 10;
    }


}