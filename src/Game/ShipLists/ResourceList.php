<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 11:51
 */

namespace BinaryStudioAcademy\Game\ShipLists;

use BinaryStudioAcademy\Game\Resources\{Fire , Water , Silicon , Sand , Metal , Iron , Fuel , Copper , Carbon};


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
             (array)new Carbon(),
             (array)new Silicon(),
             (array)new Copper(),
             (array)new Water(),
             (array)new Fuel(),
        ];

    }


}