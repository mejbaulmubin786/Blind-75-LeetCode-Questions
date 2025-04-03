class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $max_product = $nums[0];
        $min_product = $nums[0];
        $result = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            $temp_max = max($nums[$i], $max_product * $nums[$i], $min_product * $nums[$i]);
            $min_product = min($nums[$i], $max_product * $nums[$i], $min_product * $nums[$i]);
            $max_product = $temp_max;

            $result = max($result, $max_product);
        }

        return $result;
    }
}
