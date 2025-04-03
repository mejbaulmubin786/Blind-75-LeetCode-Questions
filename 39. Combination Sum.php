class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $result = [];
        sort($candidates);
        $this->findCombinations($candidates, $target, [], 0, $result);
        return $result;
    }

    private function findCombinations($candidates, $target, $currentCombination, $startIndex, &$result) {
        if ($target == 0) {
            $result[] = $currentCombination;
            return;
        }

        for ($i = $startIndex; $i < count($candidates); $i++) {
            if ($candidates[$i] > $target) {
                break;
            }

            $currentCombination[] = $candidates[$i];
            $this->findCombinations($candidates, $target - $candidates[$i], $currentCombination, $i, $result);
            array_pop($currentCombination);
        }
    }
}


// Two
class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $result = [];
        sort($candidates);
        $this->findCombinations($candidates, $target, [], 0, $result);
        return $result;
    }

    private function findCombinations($candidates, $target, $currentCombination, $startIndex, &$result) {
        if ($target == 0) {
            $result[] = $currentCombination;
            return;
        }

        for ($i = $startIndex; $i < count($candidates); $i++) {
            // যদি উপাদানটি টার্গেটের চেয়ে বড় হয়, তাহলে পরে আর কোনো উপাদান এই লুপে প্রক্রিয়াজাত হবে না।
            if ($candidates[$i] > $target) {
                break;
            }

            // একই উপাদান থেকে শুরু করব, যেন একই উপাদান একাধিকবার ব্যবহার করা যায়।
            $currentCombination[] = $candidates[$i];
            $this->findCombinations($candidates, $target - $candidates[$i], $currentCombination, $i, $result);
            
            // ব্যাকট্র্যাকিং - শেষ উপাদানটি সরিয়ে ফেলি।
            array_pop($currentCombination);
        }
    }
}
