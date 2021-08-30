<?php
namespace App;

class DBLogger implements Firstinterface
{
    public function writeToLog(){
        echo "Write DB!";
    }
    public function readFromLog(){
        echo "Read DB!";
    }
}