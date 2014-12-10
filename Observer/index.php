<?php
/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/10/14
 * Time: 7:25 AM
 */
ini_set('display_errors',1);
include_once '../autoload.php';

use Observer\Announcer;
use Observer\Departments\ADepartment;
use Observer\Departments\BDepartment;

$subject = new Announcer();

$subject->registerObserver(new ADepartment());
$subject->registerObserver(new BDepartment());

$subject->addAnnouncement(['topic' => 'Marketing','content' => 'bla..bla.. bla..']);
$subject->addAnnouncement(['topic' => 'other topic','content' => 'bla..bla.. bla..']);