<?php
class Solution {

    /**
     * @param String $text1
     * @param String $text2
     * @return Integer
     */
    function longestCommonSubsequence($text1, $text2) {
        $m = strlen($text1);
        $n = strlen($text2);

        // Create a 2D array to store lengths of LCS
        $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));

        // Build the dp table in bottom-up manner
        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($text1[$i - 1] == $text2[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
                } else {
                    $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
                }
            }
        }

        // The value at the bottom-right corner of the table is the length of the LCS
        return $dp[$m][$n];
    }
}
