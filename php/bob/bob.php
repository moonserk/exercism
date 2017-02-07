<?php
  class Bob{
    public function respondTo($str){
      if(!preg_match('/[a-z]/', $str)){
        return "Whoa, chill out!";
      }
      else if(preg_match('/\?$/', $str)){
        return "Sure.";
      }
      else{
        return "Whatever.";
      }
    }
  }

  $bob = new Bob();
  echo $bob->respondTo("FFF") . "\n";
  echo $bob->respondTo("GHJKLHHFO?") . "\n";
  echo $bob->respondTo("DDdsasdfDD") . "\n";
  echo $bob->respondTo("dsasDDdfFFasdff") . "\n";
