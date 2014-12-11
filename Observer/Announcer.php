<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/9/14
 * Time: 11:35 PM
 */

namespace Observer;

use Observer\Departments\ObserverInterface;

class Announcer implements SubjectInterface{

    protected $observers = [];
    protected $announcement = [];

    public function registerObserver(ObserverInterface $oi)
    {
        $this->observers[] = $oi;
    }

    public function removeObserver(ObserverInterface $oi)
    {
        $a = 0;
        foreach ($this->observers as $val) {
            if( $val == $oi) {
                unset($this->observers[$a]);
            }
            $a++;
        }
    }

    public function observerNotifier()
    {
        foreach ($this->observers as $observer) {
            $observer->broadcast($this->announcement);
        }
    }

    public function addAnnouncement($announcement)
    {
        $this->announcement = $announcement;

        // notify observer
        $this->observerNotifier();

        // do other stuff like save logs, etc.

    }

} 