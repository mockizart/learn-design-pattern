<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 5:20 AM
 */

namespace Strategy;


abstract class AbstractAnimal {

    protected $foods;

    protected $toys;

    abstract public function eat($foodName);

    abstract public function play($toyName);

    abstract public function animalName();

    public function sleep()
    {
        echo '<br />';
        echo 'zzZZZz...zzzZZZ...';
    }

} 