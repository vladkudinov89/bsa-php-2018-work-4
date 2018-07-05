<?php

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;

class Fire extends AbstractResource
{

    public function __construct()
    {
        $this->name = 'Fire';
        $this->count = 10;
    }

    
}