<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 19:54
 */

namespace BinaryStudioAcademy\Game;


use BinaryStudioAcademy\Game\Parts\PartsList;
use BinaryStudioAcademy\Game\Resources\ResourceList;
use LucidFrame\Console\ConsoleTable;

class User
{

    public $resourceList;
    public $partsList;
    public $userStatus;
    public $userShip;

    public $readyShip = [
        'shell',
        'wires',
        'ic',
//      'porthole',
//      'control_unit',
//      'engine',
//      'launcher',
//      'tank',

    ];

    public function __construct()
    {
        $this->resourceList = (array)new ResourceList();
        $this->partsList = (array)new PartsList();

        $this->userShip = [];

    }

    public function userStatus()
    {
        echo "\n--- Status Resource List: --- \n";

        $table = new ConsoleTable();
        $table
            ->setHeaders(array('Name Resource', 'Amount'));

        foreach ($this->resourceList['stateResource'] as $row) {
            $table->addRow(array_values($row));
        }
        $table->display();

        echo "\n--- Status Parts List: --- \n";
//        print_r($this->partsList['stateParts'][0]['namePart']);

        $table2 = new ConsoleTable();
        $table2
            ->setHeaders(array('Name Parts', 'Exist'));

        foreach ($this->partsList['stateParts'] as $command) {
            $table2->addRow((array($command['namePart'], $command['isPartExist'])));
        }

        $table2->display();
    }

    public function changeExistPart(string $argChange) : void
    {
//        print_r($this->userShip);
//        echo $argChange . PHP_EOL;
//        print_r($this->partsList['stateParts']);
//        for ($i = 0; $i < count($this->partsList['stateParts']); $i++) {
//            foreach ($this->partsList['stateParts'][$i] as $key => $value) {
//                echo $key . $value;
//            }
//        }

//        $key = array_search('shell', $this->partsList['stateParts']);
//        print_r($key);

        print_r(array_values($this->partsList['stateParts']));
    }

//    public function existUserShip()
//    {
//        if (array_key_exists($this->partsList, $this->readyShip)) {
//            echo "Есть в наборе";
//        }
//    }


}