<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 5:25 AM
 */

namespace Strategy\Animals;

use Strategy\AbstractAnimal;

use Strategy\Foods\Fish;
use Strategy\Foods\Meat;


class Cat extends AbstractAnimal {


    public function __construct()
    {
        $this->foods['meat'] = new Meat();
        $this->foods['fish'] = new Fish();

        $this->foods['catch_ball'] = new Meat();
        $this->foods['ball'] = new Fish();
    }

    public function eat($foodName)
    {
        echo '<br />';
        if (!in_array($foodName, array_keys($this->foods))) {

            echo ' :( I can eat ' . $foodName;

        } else {

            echo $this->foods[$foodName]->display();

        }
    }

    public function play($toyName)
    {
        echo '<br />';
        if (!in_array($toyName, array_keys($this->foods))) {

            echo ' :( I can eat ' . $toyName;

        } else {

            echo $this->foods[$toyName]->display();

        }
    }

    public function animalName()
    {
        echo '<br />';
        echo 'Hello I am cat';
    }
} 