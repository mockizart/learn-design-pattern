<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 5:48 AM
 */

namespace Strategy;


use Strategy\Drinks\Coke;
use Strategy\Foods\Meat;

class GuestController {

    public function __construct()
    {
        $guest = new Mockie();
        $guest->setFood(new Meat());
        $guest->setDrink(new Coke());
        $guest->display();
    }

}