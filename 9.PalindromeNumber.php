
//first Solution

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return $x == strrev($x);
    }
}


//second Solution
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
        
        $reversed = 0;
        $original = $x;
        
        while ($x > 0) {
            $reversed = $reversed * 10 + $x % 10;
            $x = (int)($x / 10);
        }
        
        return $original == $reversed;
    }
}
