<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {

    function test_wordequality()
    {
      //arrange
      $test_RepeatCounter = new RepeatCounter;
      $first_input = "Hello";
      $second_input = "hello world hello hello";

      //act
      $result = $test_RepeatCounter->CountRepeats($first_input, $second_input);

      $this->assertEquals(3, $result);
    }
  }

 ?>
