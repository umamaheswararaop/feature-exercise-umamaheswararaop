<?php

namespace Source;

// Method to Check the Discounted Price for Items

trait ProductDiscountSdk {
    public function CalculateDiscount(string $ItemName, $ItemUnit) {
        /* Logic for Calculating the Item-A */
        if ($ItemName == 'A') {
            if ($ItemUnit > 2) {
                $DiscountPriceA = intdiv($ItemUnit, 3);
                return $TotalDiscount = $DiscountPriceA * 20;
            } else {
                return 0;
            }
        }
        /* End Logic for Calculating the Item-A */
        /* Logic for Calculating the Item-B */
        if ($ItemName == 'B') {
            if ($ItemUnit > 1) {
                $DiscountPriceB = intdiv($ItemUnit, 2);
                return $TotalDiscount = $DiscountPriceB * 15;
            } else {
                return 0;
            }
        }
    }
        /* End Logic for Calculating the Item-B */
        /* Logic for Calculating the Item-D */
    public function CalculateDiscountForD($ItemUnit, $iTotalNumberOfItemA) {
        if ($iTotalNumberOfItemA > 0 || $iTotalNumberOfItemA != NULL) {
            if ($ItemUnit > $iTotalNumberOfItemA) {
                return $iTotalNumberOfItemA * 10;
            } else {
                return $ItemUnit * 10;
            }
        } else {
            return 0;
        }
    }
        /* End Logic for Calculating the Item-A */

}
?>