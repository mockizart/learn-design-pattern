<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 5:20 AM
 */

namespace Strategy;


use Strategy\Drinks\DrinkInterface;
use Strategy\Foods\FoodInterface;

abstract class AbstractGuest {

    protected $food;

    protected $drink;

    abstract public function setFood(FoodInterface $food);

    abstract public function setDrink(DrinkInterface $drink);

    public function display()
    {
        echo $this->food->display() .'<br />';
        echo $this->drink->display();
    }


} 