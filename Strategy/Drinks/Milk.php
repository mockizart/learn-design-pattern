<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 7:43 AM
 */

namespace Strategy\Drinks;


class Milk implements DrinkInterface {

    public function name()
    {
        return 'Milk';
    }

    public function display()
    {
        return 'I am drinking '.$this->name();
    }

} 