<?php
class Poisson
{
    /**
     * Factorial function
     *
     * @param  integer $number
     * @return integer
     */
    public function factorial($number)
    {
        $sum = 1;
        for ($i = 1; $i <= floor($number); $i++) {
            $sum *= $i;
        }

        return $sum;
    }

    /**
     * Poisson function.
     *
     * @param  integer $chance     The probability
     * @param  integer $occurrence The number of occurances
     * @return float
     */
    public function calculate($chance, $occurrence)
    {
        return exp(-$chance) * pow($chance, $occurrence) / $this->factorial($occurrence);
    }

}
?>