<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 11:51
 */

namespace BinaryStudioAcademy\Game\Resources;


class ResourceList
{

    public $stateResource;

    public function __construct()
    {
        return $this->stateResource = [
             (array)new Fire(),
             (array)new Iron(),
             (array)new Sand(),
             (array)new Metal(),
        ];

    }


}