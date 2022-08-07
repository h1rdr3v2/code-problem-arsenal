<?php
# LeetCode : 58. Length of Last Word
use Solution as GlobalSolution;

    class Solution {

        /**
         * @param String $s
         * @return Integer
         */
        function lengthOfLastWord($s) {
            $s = trim($s);
            $k = explode(' ',$s);
            return strlen($k[(count($k)-1)]);
        }
    }
    $s = new GlobalSolution();
    echo $s->lengthOfLastWord('   fly me   to   the moon  ');
?>