class Solution {

    /**
     * @param Integer $numBottles
     * @param Integer $numExchange
     * @return Integer
     */
    function numWaterBottles($numBottles, $numExchange) {

        $total = $numBottles;

        while($numBottles >= $numExchange)
        {
            $carry = $numBottles % $numExchange;
            $exchange = intVal( $numBottles / $numExchange);

            $total += $exchange;

            $numBottles = $carry + $exchange;
        }
        
        return $total;
    }
}