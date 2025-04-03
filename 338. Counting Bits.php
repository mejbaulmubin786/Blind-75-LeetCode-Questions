<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $ans = array_fill(0, $n + 1, 0); // Step 1: Initialize array with zeros

        for ($i = 1; $i <= $n; $i++) { // Step 2: Loop from 1 to n
            $ans[$i] = $ans[$i >> 1] + ($i & 1); // Step 3: Use the relation to calculate the count of 1's
        }

        return $ans; // Step 4: Return the result array
    }
}
