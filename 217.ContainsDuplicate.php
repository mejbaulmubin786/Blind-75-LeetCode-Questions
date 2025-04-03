//First Solution
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $nums2 = array_unique($nums);
        if(count($nums) != count($nums2)){
            return true;
        }

        return false;
        
    }
}

//Second Solution(Best Solution)

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $numSet = [];
        
        foreach ($nums as $num) {
            if (isset($numSet[$num])) {
                return true;
            }
            $numSet[$num] = true;
        }
        
        return false;
    }
}

//Third Code
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $countValues = array_count_values($nums);
        foreach ($countValues as $quantity) {
            if ($quantity >= 2) return true;
        }
        return false;
    }
}
