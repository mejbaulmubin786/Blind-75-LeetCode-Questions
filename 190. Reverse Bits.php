class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        $result = 0;
        
        // Iterate over all 32 bits
        for ($i = 0; $i < 32; $i++) {
            // Left shift result to make room for the new bit
            $result <<= 1;
            
            // Extract the last bit of n and add it to result
            $result |= ($n & 1);
            
            // Right shift n to process the next bit
            $n >>= 1;
        }
        
        return $result;
    }
}
