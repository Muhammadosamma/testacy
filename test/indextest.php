<?php

include __DIR__ .'/../web/index.php';

class indextest extends PHPUnit_Framework_TestCase
{
  public function testSayHello()
  {
      $index = new index;

      $expected = "welcome phpunit";

      $this->assertEquals($expected , $index->sayHello() );
  }


  public function testReturnArray()
  {
    $arr = new index;

    $expected = $arr->returnArray();

    $this->assertTrue( is_array($expected));

  }


  public function testReturnTrue()
  {
    $state = new index;

    $this->assertTrue($state->returnTrue() );
  }

}
