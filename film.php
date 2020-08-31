<?php

class Film{
  private $id;
  private $name;
  private $author;
  private $year;

  public function setId($id){
    $this->id = $id;
  }
  public function setName($name){
    $this->name = $name;
  }
  public function setAuthor($author){
    $this->author = $author;
  }
  public function setYear($year){
    $this->year = $year;
  }

  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }
  public function getAuthor(){
    return $this->author;
  }
  public function getYear(){
    return $this->year;
  }
}

 ?>
