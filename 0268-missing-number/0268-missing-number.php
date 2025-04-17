class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $l = count($nums);

        $sum = 0;
        $i = 0;
        while($i < $l)
        {
            $sum +=$nums[$i];
            $i++;
        }

        $a= ($l*($l+1))/2;

        return $a-$sum;
    }
}