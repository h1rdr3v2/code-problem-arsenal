<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxAscendingSum($nums)
    {
        $maxSum = $currentSum = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] > $nums[$i - 1]) {
                $currentSum += $nums[$i];
            } else {
                $maxSum = max($maxSum, $currentSum);
                $currentSum = $nums[$i];
            }
        }
        return max($maxSum, $currentSum);
    }
}

$solution = new Solution();
$nums = [10, 20, 30, 5, 10, 50];
echo $solution->maxAscendingSum($nums); // Output: 65
