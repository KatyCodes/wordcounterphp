<?php
  class RepeatCounter
  {

    function CountRepeats($first_input, $second_input)
    {
      $result = 0;
      $sentence = explode(" ", $second_input);
      foreach ($sentence as $key) {
        if (strtolower($first_input) == strtolower($key)){
          $result += 1;
        }
      }
      return $result;
    }

    function returnString($first_input, $second_input)
    {
      return $first_input;
    }

    function returnWordString($first_input, $second_input)
    {
      $word = array();
      $sentence = explode(" ", $second_input);
      foreach($sentence as $key) {
        if (strtolower($first_input) == strtolower($key)){
          array_push($word, $first_input);
        }
    }
      return $first_input;
    }
  }
 ?>
