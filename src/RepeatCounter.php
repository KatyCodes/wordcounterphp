<?php

  class RepeatCounter
  {

    function CountRepeats($second_input, $first_input)
    {
      $first_input = str_replace(array(',', '.', '?', '!'), '', $first_input);
      $sentence = explode(" ", $first_input);
      $result = 0;

      var_dump($sentence);
       for($i=0; $i<count($sentence); $i++)
       {
        if (strtolower($sentence[$i]) == strtolower($second_input))
        {
          $result += 1;
        }
    }
      return $result;
  }

  // function evaluateWords($input1, $input2)
  //      {
  //          $input1 = str_replace(array(',', '.', '?', '!'), '', $input1);
  //          $word_array = explode(" ", $input1);
  //          $output = 0;
  //          for($i=0; $i<count($word_array); $i++)
  //          {
  //              if(strtolower($word_array[$i]) == strtolower($input2))
  //              {
  //                  $output += 1;
  //              }
  //          }
  //          return $output;
  //      }

    function returnString($first_input)
    {
      return $this-> $first_input;
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
