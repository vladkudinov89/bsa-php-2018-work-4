<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05.07.18
 * Time: 15:12
 */

namespace BinaryStudioAcademy\Game\Resources;


class Water extends AbstractResource
{
    public function __construct()
    {
        $this->name = 'Water';
        $this->count = 20;
    }
}