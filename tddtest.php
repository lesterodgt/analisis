<?php
require './analisis2PHP/index.php';
class TddTests extends PHPUnit_Framework_TestCase
{
  public function test_tdd_login1()
  {
    var $result;
    $this->assertEquals(1,verificar_login('lesterod','lesterod',result) );
  }
  public function test_tdd_login2()
  {
    var $result;
    $this->assertEquals(0,verificar_login('lesterod','rob',result));
  }
}
?>

