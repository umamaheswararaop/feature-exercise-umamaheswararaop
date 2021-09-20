<?php
namespace Source;
//Abstract Class For Calcultation
abstract class AbstractSdk {
    // Method to Calculate the Total Price of SDK items
    abstract public function PriceCalculation(string $ItemName, $ItemUnit, $TotalNumberOfItemA = NULL);
}
?>