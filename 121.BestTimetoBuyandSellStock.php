//First Solution
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {

        $profit = 0;
        $left = 0;
        for ($i = 1; $i < count($prices); $i++) {
            if ($prices[$i] > $prices[$left]) {
                $profit = max($profit, $prices[$i] - $prices[$left]);
            } else {
                $left = $i;
            }
        }
        return $profit;

    }
}
