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
        'porthole',
        'control_unit',
        'engine',
        'launcher',
        'tank',

    ];

    public $resourceAll = [
        'metal',
        'fire',
        'sand',
        'iron',
        'silicon',
        'copper',
        'carbon',
        'water',
        'fuel'
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
        //check can create specific part of ship
        if (in_array(trim($argChange), $this->readyShip)) {

//            echo "Можно создавать элемент корабля. Такой элемент есть на корабле" . PHP_EOL;

            //check in array partsList our argument
            if (!in_array(trim($argChange), $this->userShip)) {


                //check need resource to build element Ship
//                $needResource =

//                if(){
//
//                } else {
//
//                }

                $this->userShip[] = trim($argChange);

                $resHaveUser = $this->resourceList['stateResource'];

                foreach ($this->partsList['stateParts'] as $key => $value) {


//            print_r($this->user->partsList['stateParts'][$key]['resourceNeed']);
//                        $er = array_search($this->partsList['stateParts'][$key]['resourceNeed'] , ucfirst($argChange));
//                    print_r($er);


                    if ($this->partsList['stateParts'][$key]['namePart'] === ucfirst($argChange)) {

                        $resNeed = $this->partsList['stateParts'][$key]['resourceNeed'];



//                        $this->partsList['stateParts'][$key]['isPartExist'] = 1;
                    }

                }

                print_r($resNeed);
                print_r($resHaveUser);

                foreach ($resNeed as $res){
                    $result = array_search($res, $resHaveUser);
                    print_r($result);
                }


                echo "$argChange is ready!" . PHP_EOL;



            } else {
                echo "Такой элемент корабля уже есть";
            }

        } else {
            echo "Нет такого элемента корабля: " . $argChange;
        }

    }


    public function mineResoure(string $argument) : void
    {
//        $this->resourceList['stateResource']

        //check can create specific resource
        if (in_array(trim($argument), $this->resourceAll)) {

//            echo "Можно создавать элемент корабля. Такой элемент есть на корабле" . PHP_EOL;


            foreach ($this->resourceList['stateResource'] as $key => $value) {

                if ($this->resourceList['stateResource'][$key]['name'] === ucfirst($argument)) {
                    $this->resourceList['stateResource'][$key]['count'] += 1;
                }

            }
            echo "$argument add to your Resource List" . PHP_EOL;

        } else {
            echo "Нет такого ресурса: " . $argument;
        }

    }


}