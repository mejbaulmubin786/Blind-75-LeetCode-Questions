class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $n = count($nums);
        
        // Expected sum of numbers from 0 to n
        $expectedSum = $n * ($n + 1) / 2;
        
        // Actual sum of the given numbers in the array
        $actualSum = array_sum($nums);
        
        // The missing number is the difference between expectedSum and actualSum
        return $expectedSum - $actualSum;
    }
}
