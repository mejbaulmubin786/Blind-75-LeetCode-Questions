<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $n = count($nums);
        $result = array_fill(0, $n, 1);

        // Prefix products
        $prefix = 1;
        for ($i = 0; $i < $n; $i++) {
            $result[$i] *= $prefix;
            $prefix *= $nums[$i];
        }

        // Suffix products and final result
        $suffix = 1;
        for ($i = $n - 1; $i >= 0; $i--) {
            $result[$i] *= $suffix;
            $suffix *= $nums[$i];
        }

        return $result;
    }
}
