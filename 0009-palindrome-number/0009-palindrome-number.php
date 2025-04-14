class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {

        if($x < 0) {
            return false;
        }

        $t = $x;
        $r = 0;

        while($t > 0)
        {
            $r = $r*10;
            $r += $t%10;
            $t = intval($t/10);

        }

        if($r == $x)
        {
            return true;
        }

        return false;
    }
}