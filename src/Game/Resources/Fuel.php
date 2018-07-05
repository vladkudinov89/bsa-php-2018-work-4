<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 15:12
 */

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;

class Fuel extends AbstractResource
{
    public function __construct()
    {
        $this->name = 'Fuel';
        $this->count = 100;
    }
}