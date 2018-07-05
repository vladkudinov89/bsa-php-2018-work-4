<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 15:11
 */

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;

class Copper extends AbstractResource
{
    public function __construct()
    {
        $this->name = 'Copper';
        $this->count = 4;
    }

}