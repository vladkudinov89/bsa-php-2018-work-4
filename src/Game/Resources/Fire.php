<?php

namespace BinaryStudioAcademy\Game\Resources;

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 03.07.18
 * Time: 18:56
 */

class Fire extends AbstractResource
{

    public function __construct()
    {
        $this->name = 'Fire';
        $this->count = 10;
    }

    
}