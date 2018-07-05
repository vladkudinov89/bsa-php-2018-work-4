<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04.07.18
 * Time: 17:45
 */

namespace BinaryStudioAcademy\Game\Parts;

use BinaryStudioAcademy\Game\Contracts\iParts\Parts;

abstract class AbstractPart implements Parts
{

    public $namePart ;
    public $resourceNeed;
    public $isPartExist;

    public function produce(array $resourceNeed) {
        $this->use($resourceNeed);
        $this->isPartExist = true;
    }
    private function use(array $resourceNeed) {
        foreach ($this->resourceNeed as $r) {
            if (array_key_exists($r, $resourceNeed)) {
                $resourceNeed[$r]->use();
            }
        }
    }


}