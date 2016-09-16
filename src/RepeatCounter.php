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
  }
 ?>
