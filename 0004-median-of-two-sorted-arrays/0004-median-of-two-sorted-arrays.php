class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $r = $this->merge($nums1, $nums2);
        $l = count($r);

        if($l%2 == 0)
        {
            return ($r[intval($l/2)]+ $r[intval($l/2)-1])/2;
        } else {
            return $r[intval($l/2)];
        }
    }

    function merge($n1, $n2){
        $p1 = 0;
        $p2 = 0;
        $p3 = 0;

        $l1 =  count($n1);
        $l2 =  count($n2);

        $a = [];

        while($p1 < $l1 || $p2 < $l2) {
            $va1 = $p1 < $l1 ? $n1[$p1] : PHP_INT_MAX ;
            $va2 = $p2 < $l2 ? $n2[$p2] : PHP_INT_MAX ;

            if($va1 < $va2) {
                $a[$p3] = $va1;
                $p1++;
            }else {
                $a[$p3] = $va2;

                $p2++;
            }

            $p3++;
        }

        return $a;
    }
}