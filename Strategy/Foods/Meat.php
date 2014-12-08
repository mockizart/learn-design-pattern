<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 6:21 AM
 */

namespace Strategy\Foods;


class Meat implements FoodInterface {

    public function name()
    {
       return 'Meat';
    }

    public function display()
    {
        echo 'I am eating '.$this->name();
    }

} 