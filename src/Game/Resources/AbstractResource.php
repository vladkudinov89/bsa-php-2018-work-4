<?php
namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\Contracts\iResource\Resource;

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 03.07.18
 * Time: 18:19
 */

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