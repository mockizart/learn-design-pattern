<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 7:43 AM
 */

namespace Strategy\Drinks;


class Coke implements DrinkInterface {

    public function name()
    {
        return 'Coke';
    }

    public function display()
    {
        return 'I am drinking '.$this->name();
    }

} 