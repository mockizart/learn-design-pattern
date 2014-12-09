<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 7:03 PM
 */

namespace Strategy;


use Strategy\Drinks\DrinkInterface;
use Strategy\Foods\FoodInterface;

class Mockie extends AbstractGuest {

    public function setFood(FoodInterface $food)
    {
        $this->food = $food;
    }

    public function setDrink(DrinkInterface $drink)
    {
        $this->drink = $drink;
    }

    public function display()
    {
        echo 'Hello I\'m Mockie <br />';
        parent::display();
    }

} 