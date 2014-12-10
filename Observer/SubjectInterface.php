<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/9/14
 * Time: 5:53 PM
 */

namespace Observer;


use Observer\Departments\ObserverInterface;

interface SubjectInterface {

    public function registerObserver(ObserverInterface $oi);
    public function removeObserver(ObserverInterface $oi);
    public function observerNotifier();

} 