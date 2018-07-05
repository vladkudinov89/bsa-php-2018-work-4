<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 14:51
 */

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\AbstractClasses\AbstractResource;


class Carbon extends AbstractResource
{

    public function __construct()
    {
        $this->name = 'Carbon';
        $this->count = 5;
    }


}