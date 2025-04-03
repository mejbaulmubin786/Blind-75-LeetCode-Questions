class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s) {
    $n = strlen($s);
    if ($n == 0 || $s[0] == '0') {
        return 0;
    }
    
    // Initialize the dp array
    $dp = array_fill(0, $n + 1, 0);
    $dp[0] = 1; // Base case: There's one way to decode an empty string
    $dp[1] = $s[0] == '0' ? 0 : 1; // There's one way to decode if the first character is valid
    
    for ($i = 2; $i <= $n; $i++) {
        $oneDigit = intval(substr($s, $i - 1, 1));
        $twoDigits = intval(substr($s, $i - 2, 2));
        
        // Check if the single digit decode is valid (between 1 and 9)
        if ($oneDigit >= 1 && $oneDigit <= 9) {
            $dp[$i] += $dp[$i - 1];
        }
        
        // Check if the two digits decode is valid (between 10 and 26)
        if ($twoDigits >= 10 && $twoDigits <= 26) {
            $dp[$i] += $dp[$i - 2];
        }
    }
    
    return $dp[$n];
  }
}
