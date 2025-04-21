class Solution {

    function char2num($s)
    {
        switch ($s) {
            case 'I': return 1;
            case 'V': return 5;
            case 'X': return 10;
            case 'L': return 50;
            case 'C': return 100;
            case 'D': return 500;
            case 'M': return 1000;
            default: return 0;
        }
    }

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;
        for($i = 0; $i < strlen($s); $i++) {
            if ($i + 1 < strlen($s) && $this->char2num($s[$i]) < $this->char2num($s[$i + 1])) {
                $result -= $this->char2num($s[$i]);
            } else {
                $result += $this->char2num($s[$i]);
            }
        }
        return $result;
        
    }

    
}