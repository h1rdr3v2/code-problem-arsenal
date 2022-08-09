<?php
    //2363. Merge Similar Items

use Solution as GlobalSolution;

    class Solution {

        /**
         * @param Integer[][] $items1
         * @param Integer[][] $items2
         * @return Integer[][]
         */
        function mergeSimilarItems($items1, $items2) {
            $newarr = array_merge($items1,$items2);

            $retarr = [];

            for ($i=0; $i < count($newarr); $i++) { 
                $value = $newarr[$i][0];
                $weight = $newarr[$i][1];
                if (isset($retarr[$value])){
                    $retarr[$value][1] = $retarr[$value][1]+$weight;
                }else{
                    $retarr[$value] = [$value,$weight];
                }
            }
            ksort($retarr);
            return $retarr;
        }
    }
    $s = new GlobalSolution();
    print_r($s->mergeSimilarItems([[1,1],[4,5],[3,8]],[[3,1],[1,5]]));
?>