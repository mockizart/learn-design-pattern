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
        return 'Fish';
    }

    public function display()
    {
        return 'I am eating '.$this->name();
    }

} 