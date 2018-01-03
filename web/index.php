<?php

  include __DIR__ . "/../vendor/autoload.php";

  $ayhaga = 'ayhaga';


  class index
  {

    public function sayHello()
    {
      return "welcome phpunit";
    }

    public function returnArray()
    {
      return ['hello' , 'world' , 'this' , 'is' , 'an' , 'array'];
    }

    public function returnTrue()
    {
      return true;
    }

  }
