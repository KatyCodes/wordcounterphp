<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {

    function test_wordequality()
    {
      //arrange
      $test_RepeatCounter = new RepeatCounter;
      $sentence = "hello world hello hello hello hello";
      $word = "hello";

      //act
      $result = $test_RepeatCounter->CountRepeats( $sentence, $word);

      $this->assertEquals(5, $result);
    }

    function test_wordCapTest()
    {
      //arrange
      $test_RepeatCounter = new RepeatCounter;
      $sentence = "hello world hello hello hello hello";
      $word = "Hello";

      //act
      $result = $test_RepeatCounter->CountRepeats( $sentence, $word);

      $this->assertEquals(5, $result);
    }

  function test_wordInStringTest()
    {
      //arrange
      $test_RepeatCounter = new RepeatCounter;
      $sentence = "hello world hello hello hello hello";
      $word = "Hello";

      //act
      $result = $test_RepeatCounter->CountRepeats( $sentence, $word);

      $this->assertEquals(5, $result);
    }


 function test_wordInStringTestCase() {

   //arrange
    $test_RepeatCounter = new RepeatCounter;
    $sentence = "hello world hello hello hello hello";
    $word = "Hello";

    //act
    $result = $test_RepeatCounter->CountRepeats( $sentence, $word);

    //assert
    $this->assertEquals(5, $result);
   }

  }

 ?>
