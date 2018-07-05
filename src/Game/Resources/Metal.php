<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 13:02
 */

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;

class Metal extends AbstractResource
{
    public function __construct()
    {
        $this->name = 'Metal';
        $this->count = 10;
    }

}