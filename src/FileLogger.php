<?php
namespace App;

class FileLogger implements Firstinterface

{
public function writeToLog(){
    echo "Write!";
}
public function readFromLog(){
    echo "Read!";
}
}