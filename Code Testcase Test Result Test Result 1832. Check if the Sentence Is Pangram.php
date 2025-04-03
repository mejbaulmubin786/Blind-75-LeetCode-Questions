class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
    // Initialize a set to track unique letters
    $letters = array();

    // Traverse each character in the sentence
    for ($i = 0; $i < strlen($sentence); $i++) {
        $char = $sentence[$i];
        
        // Check if the character is a letter
        if ($char >= 'a' && $char <= 'z') {
            $letters[$char] = true;
        }
    }

    // Check if the set contains all 26 letters
    return count($letters) === 26;
  }
}
