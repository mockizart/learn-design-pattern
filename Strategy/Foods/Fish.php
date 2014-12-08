<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 6:38 AM
 */

namespace Strategy\Foods;


class Fish implements FoodInterface {

    public function name()
    {
        echo 'Fish';
    }

    public function display()
    {
        echo 'I am eating '.$this->name();
    }

} 