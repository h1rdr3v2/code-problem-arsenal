<?php
# LeetCode : 13. Roman to Integer
use Solution as GlobalSolution;

    class Solution {

        /**
         * @param String $s
         * @return Integer
         */
        function romanToInt($s) {
            $s = strtoupper($s);
            $roman = [
                'I'=>1,
                'V'=>5,
                'X'=>10,
                'L'=>50,
                'C'=>100,
                'D'=>500,
                'M'=>1000
            ];
            $exceptions = [
                'IV'=>4,
                'IX'=>9,
                "XL"=>40,
                "XC"=>90,
                "CD"=>400,
                "CM"=>900
            ];
            $number = 0;
            
            //Main calculation
            $valid = str_split($s,1);
            if (1 <= count($valid) && count($valid) <= 15) {
                // Roman exceptions
                foreach ($exceptions as $key => $val) {
                    if (strpos($s,$key) !== false) {
                        $number += $val;
                        $s = str_replace($key,'',$s);
                    }
                }

                //Addition
                $convert = str_split($s,1);
                foreach ($convert as $val) {
                    if (array_key_exists($val,$roman)) {
                        $number += $roman[$val];
                    }
                }
                if ($number > 3999) {
                    return false;
                }
            }
            return $number;
        }
    }
    $s = new Solution();
    echo $s->romanToInt('LVIII');
?>