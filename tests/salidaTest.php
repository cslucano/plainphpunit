<?php

require_once __DIR__.'/salida.php';

class salidaTest extends PHPUnit_Framework_TestCase
{
    function testNextPaymentDate()
    {
      $this->assertEquals('1', nextPaymentDate(''));
    }
}
