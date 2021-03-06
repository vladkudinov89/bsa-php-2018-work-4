<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 18:02
 */

namespace BinaryStudioAcademy\Game\ShipLists;

use BinaryStudioAcademy\Game\Parts\{Shell , Tank , Porthole , Launcher , Engine , ControlUnit };


class PartsList
{

    public $stateParts;

    public function __construct()
    {
        return $this->stateParts = [
            (array)new Shell(),
            (array)new Engine(),
            (array)new ControlUnit(),
            (array)new Launcher(),
            (array)new Porthole(),
            (array)new Tank(),

        ];

    }
}