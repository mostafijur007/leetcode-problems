class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $c = 0;
        $d = $digits;
        $l = count($digits)-1;
        for ($i= $l; $i>=0; $i--){

            if($i == $l) {
            	$d[$i]++;
            }

            if($c > 0) {
               $d[$i]++;
               $c = 0;
            }

            if($d[$i]>9) {
                $m = $d[$i]%10;
                $d[$i] = $m;
                $c++;

            }

            if($i == 0 && $c > 0) {
                array_unshift($d, $c);
            }
        }

        return $d;
    }
}