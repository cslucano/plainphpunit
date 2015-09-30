<?php

require_once __DIR__.'/../arreglo.php';

class arregloTest extends PHPUnit_Framework_TestCase
{
    function testReturnArreglo()
    {
      $this->assertEquals([], returnArray());
    }
}
