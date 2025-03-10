class Solution {

    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums) {
       $n = count($nums);
    $left = 0;
    $sum = 0;
    $minLength = PHP_INT_MAX; 

    for ($right = 0; $right < $n; $right++) {
        $sum += $nums[$right]; 

        while ($sum >= $target) {
            $minLength = min($minLength, $right - $left + 1);
            $sum -= $nums[$left];
            $left++;
        }
    }

    return ($minLength == PHP_INT_MAX) ? 0 : $minLength;
        
    }
}