<?php

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
        return "Whoa, chill out!";
      }
      else if(preg_match('/\?$/', $str)){
        return "Sure.";
      }
      else if(!preg_match('/[0-9a-zA-Z]/', $str)){
          return "Fine. Be that way!";
      }
      else{
        return "Whatever.";
      }
    }
  }