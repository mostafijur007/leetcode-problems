class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $m = '';
        $l = strlen($word1) < strlen($word2) ? strlen($word1) : strlen($word2);
        $r = '';

        for($i=0; $i < $l; $i++)
        {
            $m .= $word1[$i]; 
            $m .= $word2[$i]; 
        }

        if(strlen($word1) < strlen($word2))
        {
            $r = substr($word2,$l,strlen($word2));
        } else {
             $r = substr($word1,$l,strlen($word1));
        }

        return $m .=$r;
        
    }
}