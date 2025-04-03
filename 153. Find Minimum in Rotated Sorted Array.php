class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $left = 0;
        $right = count($nums) - 1;

        // If the array is not rotated (first element is less than last element)
        if ($nums[$left] <= $nums[$right]) {
            return $nums[$left];
        }

        // Binary search to find the minimum element
        while ($left < $right) {
            $mid = $left + (int)(($right - $left) / 2);

            // Check if the mid element is greater than the right element
            if ($nums[$mid] > $nums[$right]) {
                // The minimum element is in the right part
                $left = $mid + 1;
            } else {
                // The minimum element is in the left part (including mid)
                $right = $mid;
            }
        }

        // After the loop, left and right should converge to the minimum element
        return $nums[$left];
    }
}


//Second 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $left = 0;
        $right = count($nums) - 1;

        while ($left < $right) {
            $mid = $left + intval(($right - $left) / 2);

            // যদি মধ্যবর্তী উপাদানটি ডানপাশের উপাদানগুলির থেকে বড় হয়
            if ($nums[$mid] > $nums[$right]) {
                // তাহলে আমরা জানি, সর্বনিম্ন উপাদানটি ডানপাশে অবস্থিত
                $left = $mid + 1;
            } else {
                // অন্যথায়, সর্বনিম্ন উপাদানটি বামপাশে অবস্থিত
                $right = $mid;
            }
        }

        // অবশেষে, বাম দিকের ইন্ডেক্সটি সর্বনিম্ন উপাদানটি নির্দেশ করবে
        return $nums[$left];
    }
}

  
            
