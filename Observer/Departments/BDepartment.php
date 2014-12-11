<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/10/14
 * Time: 6:17 AM
 */

namespace Observer\Departments;


class BDepartment implements ObserverInterface {


    public function specialBehaviour(){}

    public function updateDatabase(){} // another behaviour from B department.

    public function subscriber()
    {
        // fetch data from database who sould be receive the announcement
        return 'all subscribers Notified!!  <br />';
    }

    public function broadcast($announcement)
    {
        echo __CLASS__.': I got your update..!! Thank you <br />';
        echo $this->subscriber();
        $this->specialBehaviour();
        $this->updateDatabase();
        echo '<hr />';
    }

    /**
     * you can add, remove or change the logic of these behaviours as you like,
     * Without change Announcer class and Keep clean.
     * */

} 