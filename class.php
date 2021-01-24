<?php

  Class Dog
  {
    public $name = 'Hachi';
    public function bark(){
      echo "ワン";
    }
  }
  $a = new Dog();

  $a->bark();
  echo "\n";
  echo $a->name;
  echo "\n";
?>