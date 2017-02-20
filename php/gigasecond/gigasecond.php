<?php
  function from($date){
    return $date->add(new DateInterval('PT1000000000S'));
  }
