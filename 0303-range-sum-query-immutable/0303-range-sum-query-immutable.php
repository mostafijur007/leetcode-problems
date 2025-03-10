class NumArray {
   private $nums = [];
   private $prefixSum = [];

    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
       $this->nums = $nums;
        $this->prefixSum[] = 0; 

        foreach ($nums as $i => $v) {
            $this->prefixSum[] = $this->prefixSum[$i] + $v;
        }
        
    }
  
    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function sumRange($left, $right) {
        return $this->prefixSum[$right + 1] - $this->prefixSum[$left];
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($left, $right);
 */