<?php

function toRna($str){
      $first = $str;
      $second = "";
      for($i = 0; $i < strlen($str) ; $i++){
        switch($first[$i]){
            case 'G': 
                $first[$i] = str_replace($first[$i], 'C', $first[$i]);
                break;
            case 'C': 
                $first[$i] = str_replace($first[$i], 'G', $first[$i]);
                break;
            case 'T': 
                $first[$i] = str_replace($first[$i], 'A', $first[$i]);
                break;
            case 'A': 
                $first[$i] = str_replace($first[$i], 'U', $first[$i]);
                break;
        }
      }
      return $first;
}

toRna("GCTA");