<?php

namespace Source;

// Sdk Price Calculations

class Sdk extends AbstractSdk {

    use ProductDiscountSdk;

    /* Code for total SDK Price Calculation */
    Public function PriceCalculation(string $ItemName, $ItemUnit, $TotalNumberOfItemA = NULL) {
        if ($ItemName == 'A') {
            $iTotalDiscount = $this->CalculateDiscount($ItemName, $ItemUnit);
            return $iTotalPrice = ($ItemUnit * 50) - $iTotalDiscount;
        }
        if ($ItemName == 'B') {
            $iTotalDiscount = $this->CalculateDiscount($ItemName, $ItemUnit);
            return $iTotalPrice = ($ItemUnit * 30) - $iTotalDiscount;
        }
        if ($ItemName == 'C') {
            /* Logic for Calculating the items C */
            if ($ItemUnit > 1) {
                if ($ItemUnit == 2) {
                    $dis_csum = 38;
                    $actual_csum = 0;
                } else {
                    $qty_c3 = intdiv($ItemUnit, 3);
                    $qty_c3_remainder = $ItemUnit % 3;
                    $qty_c3_remainder_sum = 0;
                    if ($qty_c3_remainder == 1) {
                        $qty_c3_remainder_sum = 20;
                    }
                    if ($qty_c3_remainder == 2) {
                        $qty_c3_remainder_sum = 38;
                    }
                    $actual_csum = 0;
                    $dis_csum = $qty_c3 * 50 + $qty_c3_remainder_sum;
                }
            } else {
                $dis_csum = $ItemUnit * 20;
                //$actual_csum = $ItemUnit * 20;
            }
            return $iTotalPrice = $dis_csum;
            /* End of Logic for Calculating the items C */
        }
        if ($ItemName == 'D') {
            $iTotalDiscount = $this->CalculateDiscountForD($ItemUnit, $TotalNumberOfItemA);
            return $iTotalPrice = ($ItemUnit * 15) - $iTotalDiscount;
        }
        if ($ItemName == 'E') {
            return $iTotalPrice = $ItemUnit * 5;
        }
    }
    /* End of Code for total SDK Price Calculation */

}

?>