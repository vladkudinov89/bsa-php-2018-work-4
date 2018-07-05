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
            'help' => 'user help',
            'status' => 'View Status',
            'build' => 'Build a ship module',
            'scheme' => 'Info about what modules/resources are needed',
            'produce' => 'Produce a combined resource',
            'mine' => 'Add a resource unit to inventory',
            'exit' => 'Exit Game',
        ];
    }

}