class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace('/[^a-z0-9 ]/i', '', $s);
        $s = str_replace(' ', '', $s);
        $s = strtolower($s);

        $left = 0; 
        $right = strlen($s)-1;

        while($left <= $right)
        {
            if($s[$left] != $s[$right])
            {
                return false;
                
            } 

            $left++;
            $right--;
        }

        return true;
        
    }
}