class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {



        while($n >= 3)
        {
            $n = $n/3;
        }

        if($n == 1)
        {
            return true;
        }

        return false;
        
    }
}