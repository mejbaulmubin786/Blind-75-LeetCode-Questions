class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
    $n = count($nums);
    $maxReach = 0;
    
    for ($i = 0; $i < $n; $i++) {
        if ($i > $maxReach) {
            return false; // যদি আমরা ইনডেক্স i তে পৌঁছাতে না পারি
        }
        $maxReach = max($maxReach, $i + $nums[$i]); // সর্বোচ্চ পৌঁছানোর সক্ষমতা আপডেট করা
        if ($maxReach >= $n - 1) {
            return true; // যদি আমরা শেষ ইনডেক্সে পৌঁছাতে পারি
        }
    }
        return false; // যদি কোনভাবে শেষ ইনডেক্সে পৌঁছানো না যায়
    }
}
