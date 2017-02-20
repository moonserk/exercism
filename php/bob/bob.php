<?php
<<<<<<< HEAD

  class Bob{
    public function respondTo($str){
      $str = trim($str);
      if(preg_match('/\?$/', $str) && !preg_match('/[A-Z]/', $str)){
         return "Sure.";
      }
      else if(preg_match('/[0-9]/', $str) && !preg_match('/[A-Z]/', $str) || preg_match('/[0-9]/', $str) && !preg_match('/\?$/', $str) && !preg_match('/[A-Z]/', $str)){
          return 'Whatever.';
      }
      else if(!preg_match('/[a-z]/', $str) && preg_match('/[0-9A-Z]/', $str)){
=======
  class Bob{
    public function respondTo($str){
      if(!preg_match('/[a-z]/', $str)){
>>>>>>> 14d380ac29e06445c2e4508c2ee4387ad37e0863
        return "Whoa, chill out!";
      }
      else if(preg_match('/\?$/', $str)){
        return "Sure.";
      }
<<<<<<< HEAD
      else if(!preg_match('/[0-9a-zA-Z]/', $str)){
          return "Fine. Be that way!";
      }
=======
>>>>>>> 14d380ac29e06445c2e4508c2ee4387ad37e0863
      else{
        return "Whatever.";
      }
    }
<<<<<<< HEAD
  }
=======
  }

  $bob = new Bob();
  echo $bob->respondTo("FFF") . "\n";
  echo $bob->respondTo("GHJKLHHFO?") . "\n";
  echo $bob->respondTo("DDdsasdfDD") . "\n";
  echo $bob->respondTo("dsasDDdfFFasdff") . "\n";
>>>>>>> 14d380ac29e06445c2e4508c2ee4387ad37e0863
