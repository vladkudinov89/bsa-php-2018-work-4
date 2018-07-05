<?php
namespace BinaryStudioAcademy\Game\AbstractClasses;

use BinaryStudioAcademy\Game\Contracts\iResource\Resource;


abstract class AbstractResource implements Resource
{
    public $name ;
    public $count ;

    public function getName() : string
    {
        return $this->name;
    }

    public function getCount(): int
    {
        return $this->count;
    }


}