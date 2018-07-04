<?php

namespace BinaryStudioAcademy\Game\Resources;

//use BinaryStudioAcademy\Game\Resources\AbstractResource;

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 03.07.18
 * Time: 18:56
 */

class Fire extends AbstractResource
{
    public $name ;
    public $count ;

    public function __construct()
    {
        $this->name = 'Fire';
        $this->count = 0;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getCount(): int
    {
        return $this->count;
    }
    
    
}