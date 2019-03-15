<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 15.03.19
 * Time: 16:24
 */

namespace classes;

class Rhombus
{

    private $height;

    public function __construct($height = 4)
    {
        $this->height = $height;
    }

    public function draw(){

        $r1 = 0;
        $center = $this->height/2;

        $even = ($this->height & 1) ? true : false;
        echo "</br>";
        for($y=1; $y < $this->height; $y++){
            if ($y <= $center){
                $l = $this->height-$y - $center;
                $r = $y*2-1;
                echo str_repeat('-', $l ).str_repeat('*', $r ).str_repeat('-', $l )."\n";
                $r1 = $r;
            } else {
                $l = ($even) ? ($y - $center + 1) : ($y - $center);
                $r1 = $r1-2;
                echo str_repeat('-', $l ).str_repeat('*', $r1 ).str_repeat('-', $l )."\n";
            }

        }
    }
}