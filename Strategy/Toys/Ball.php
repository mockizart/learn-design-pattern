<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 7:43 AM
 */

namespace Strategy\Toys;


class CatchBall implements ToyInterface {

    public function name()
    {
        echo 'Catch Ball';
    }

    public function display()
    {
        echo 'I am playing '.$this->name();
    }

} 