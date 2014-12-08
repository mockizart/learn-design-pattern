<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 5:48 AM
 */

namespace Strategy;


use Strategy\Animals\Cat;

class TamagotchiController {

    public function __construct()
    {
        $animal = new Cat();
        $animal->animalName();
        $animal->sleep();
        $animal->eat('meat');
    }

}