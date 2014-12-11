<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/10/14
 * Time: 6:17 AM
 */

namespace Observer\Departments;


class ADepartment implements ObserverInterface {


    public function generateReport()
    {
        // send email or another stuff
        return 'Report generated successfully <br />';
    }

    public function subscriber()
    {
        // fetch data from database who sould be receive the announcement
        return 'Notified!!  <br />';
    }

    public function broadcast($announcement)
    {
        if ($announcement['topic'] == 'Marketing') {
            echo __CLASS__.': I got your update..!! Thank you <br />';
            echo $this->generateReport();
            echo $this->subscriber();
            echo '<hr />';
        }
    }

    /**
     * you can add, remove or change the logic of these behaviours as you like,
     * Without change Announcer class and Keep clean.
     * */

} 