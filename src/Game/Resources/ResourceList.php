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
//    private $fire;
//    private $iron;

    public $stateResource;

    public function __construct()
    {


        return $this->stateResource = [
             (array)new Fire(),
             (array)new Iron(),
        ];

//        $this->fire = new Fire;
//        $this->iron = (array) new Iron();
//        array_push($this->stateResource , $this->fire);
//        $this->stateResource[] = $this->array;
//        print_r($this->stateResource);
//        $this->stateResource[] = $this->fire;
//        $this->stateResource[] = $this->iron;
//        print_r($this->fire);
//        print_r($this->iron);
    }

    public function add()
    {

    }


//    public function state()
//    {
////        print_r($this->fire->getName());
////        $stateResource[] = $this->fire;
////        $stateResource[] = $this->iron;
////        print_r($stateResource);
////        return $stateResource;
//    }


}