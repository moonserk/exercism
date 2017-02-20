<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if(strlen($a) != strlen($b)){
      $first = str_split($a);
      $second = str_split($b);
      $result = 0;
      for($i = 0; $i < strlen($a) ; $i++){
        if($first[$i] != $second[$i]){
            $result = $result + 1;
        }
      }
      return $result;
    }

}
