<?php
class Solution
{
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $carry = 1;

        // Process from right to left
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $sum = $digits[$i] + $carry;
            $digits[$i] = $sum % 10;
            $carry = intval($sum / 10);

            // If no carry, we're done
            if ($carry == 0) break;
        }

        // If we still have carry, prepend it
        if ($carry > 0) {
            array_unshift($digits, $carry);
        }

        return $digits;
    }
}

$solution = new Solution();
$digits = [1, 2, 3];
print_r($solution->plusOne($digits)); // Output: [1,2,4]