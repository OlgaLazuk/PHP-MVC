<?php


class Student extends User
{
private $stipend;
private $course;

    public function getStipend(){
    return $this->stipend;
    }

    public function setStipend($stipend){
    $this->stipend = $stipend;
    }

    public function getCourse(){
        return $this->course;
    }

    public function setCourse($course){
        $this->course = $course;
    }

}