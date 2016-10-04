<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {

    function test_wordequality()
    {
      //arrange
      $test_RepeatCounter = new RepeatCounter;
      $second_input = "hello";
      $first_input = "hello world hello hello hello";

      //act
      $result = $test_RepeatCounter->CountRepeats( $second_input, $first_input);

      $this->assertEquals(4, $result);
    }

  //   function test_wordTest()
  //   {
  //     //arrange
  //     $test_RepeatCounter = new RepeatCounter;
  //     $first_input = "Hello";
  //     $second_input = "hello world hello hello hello";
  //
  //     //act
  //     $result = $test_RepeatCounter->return($first_input);
  //
  //     $this->assertEquals($first_input, $result);
  //   }
  //
  //
  // function test_wordInStringTest()
  //   {
  //     //arrange
  //     $test_RepeatCounter = new RepeatCounter;
  //     $first_input = "HellO";
  //     $second_input = "hello world hello hello hello";
  //
  //     //act
  //     $result = $test_RepeatCounter->CountRepeats($first_input, $second_input);
  //
  //     $this->assertEquals("$first_input", $result);
  //   }
  //
  //
  // function test_wordInStringTestCase()
  //   {
  //     //arrange
  //     $test_RepeatCounter = new RepeatCounter;
  //     $first_input = "Hello";
  //     $second_input = "HellO world helLo hello hello";
  //
  //     //act
  //     $result = $test_RepeatCounter->CountRepeats($first_input, $second_input);
  //
  //     var_dump($result);
  //     $this->assertEquals(4, $result);
  //   }

  }

 ?>
