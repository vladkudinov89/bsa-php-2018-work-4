<?php
namespace BinaryStudioAcademy\Game;

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 03.07.18
 * Time: 21:20
 */
class Commands_Spaceship
{

    public $arrayCommands = array();

    public function __construct()
    {
        $this->arrayCommands = [
            'h' => 'user help',
            's' => 'View Status',
            'exit' => 'Exit Game',
            'mine:unnamed' => 'No such resource.',
            'build' => 'Inventory should have: metal,fire. Argument: <build>',
            'build:shell' => 'shell',
            'build:porthole' => 'Inventory should have: sand,fire',
        ];
    }





//    public function commands()
//    {
//        return [
//            'help' => 'user help',
//            'status' => 'View Status',
//            'exit' => 'Exit Game',
//            'mine:unnamed' => 'No such resource.',
//            'build' => 'Inventory should have: metal,fire. Argument: <build>',
//            'build:shell' => 'shell',
//            'build:porthole' => 'Inventory should have: sand,fire',
//        ];
//    }

}