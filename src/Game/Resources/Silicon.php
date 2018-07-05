<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 15:10
 */

namespace BinaryStudioAcademy\Game\Resources;


class Silicon extends AbstractResource
{
    public function __construct()
    {
        $this->name = 'Silicon';
        $this->count = 3;
    }

}