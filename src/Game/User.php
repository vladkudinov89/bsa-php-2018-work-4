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

    public $resNeed;
    public $resHaveUser;
    public $readyToBuild;

    public $arrayToAddPartShip;

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
        print_r($this->userShip);
        //check can create specific part of ship
        if (in_array(trim($argChange), $this->readyShip)) {

//            echo "Можно создавать элемент корабля. Такой элемент есть на корабле" . PHP_EOL;

            //check in array partsList our argument
            if (!in_array(trim($argChange), $this->userShip)) {

                foreach ($this->partsList['stateParts'] as $key => $value) {

                    if ($this->partsList['stateParts'][$key]['namePart'] === ucfirst($argChange)) {

                        if ($this->needResources(
                            $this->partsList['stateParts'][$key]['resourceNeed'],
                            $this->resourceList['stateResource']
                        )
                        ) {
                            $this->partsList['stateParts'][$key]['isPartExist'] = 1;
                            //Add to ready ship list
                            $this->userShip[] = trim($argChange);
                            echo "$argChange is ready!" . PHP_EOL;
                        } else {
                            echo "$argChange Не построен!" . PHP_EOL;
                        }

//                        //Ищем что нам необходимо из материалов
//                        foreach ($this->partsList['stateParts'][$key]['resourceNeed'] as $res) {
//
//                            $resHaveUser = $this->resourceList['stateResource'];
//
//                            //Смотрим какаие ресурсы есть у User
//                            foreach ($resHaveUser as $key => $value) {
//
//                                //Если совпадает название ресурса
//                                if ($this->resourceList['stateResource'][$key]['name'] === ucfirst($res)) {
//
//                                    if ($this->resourceList['stateResource'][$key]['count'] > 0) {
//                                        $this->resourceList['stateResource'][$key]['count'] -= 1;
//                                        $readyToBuild = true;
//                                        echo "Материал за постройка корабля отминусован";
//
//                                    } else {
//                                        $readyToBuild = false;
//                                        echo "Мало ресурса : " . $res . PHP_EOL;
//
//                                    }
//
//                                }
//                            }
//
//                        }

//                            $this->partsList['stateParts'][$key]['isPartExist'] = 1;


                    }//if

                }//foreach


            } else {
                echo "Такой элемент корабля уже есть";
            }

        } else {
            echo "Нет такого элемента корабля: " . $argChange;
        }

    }

    private function needResources(array $resourceNeed, array &$usersResource)
    {

        //Ищем что нам необходимо из материалов
        foreach ($resourceNeed as $res) {

            //$usersResource = $this->resourceList['stateResource'];

            //Смотрим какаие ресурсы есть у User
            foreach ($usersResource as $key => $value) {

                //Если совпадает название ресурса
                if ($usersResource[$key]['name'] === ucfirst($res)) {

                    if ($usersResource[$key]['count'] > 0) {
                        $usersResource[$key]['count'] -= 1;
                        $readyToBuild = true;
                        echo "Материал " . $usersResource[$key]['name'] . " за постройка корабля отминусован" . PHP_EOL;


                    } else {
                        $readyToBuild = false;
                        echo "Мало ресурса : " . $res . PHP_EOL;

                    }

                }
            }

        }

        return $readyToBuild;

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