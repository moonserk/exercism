<?php
    function raindrops($n){

        $funcSer = function($s){
            return $s == 3 ||  $s == 5 || $s == 7 ? true: false; 
        };

        $arr = array_filter(array_filter(range(1, $n), function($v)use($n){return $n % $v === 0;}), $funcSer);
        $ho = array(3 => 'Pling', 5=>'Plang', 7 => 'Plong');
        
        return empty($arr) ? strval($n) : strtr(implode($arr), $ho);
        
    }

    echo raindrops(1) . "\n";