<?php

use Solution as GlobalSolution;

    class Solution {

        /**
         * @param Integer[] $nums
         * @param Integer $target
         * @return Integer[]
         */
        function twoSum($nums, $target) {
            $major = 0;
            for ($i=1; true ; $i++) { 
                if ($nums[$major]+$nums[$i] == $target) {
                    return [$major,$i];
                }elseif ((array_key_last($nums)) == $i) {
                    $major += 1;
                    $i = $major;
                }
            }           
        }
    }
    $s = new GlobalSolution();
    print_r($s->twoSum([3,3],6));
?>