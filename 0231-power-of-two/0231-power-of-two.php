class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {

        while($n >= 2){
            $n= $n/2;
        }

        echo $n;

        if($n == 1)
        {
            return true;
        }
        return false;
        
    }
}