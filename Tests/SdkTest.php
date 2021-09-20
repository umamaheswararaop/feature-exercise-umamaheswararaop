<?php
use \PHPUnit\Framework\TestCase;
use Source\Sdk;

/**
 * Test Class for SDK Item Price calculations with discounted prices
 */
class SdkTest extends TestCase
{
    /**
     * To Set Item DataProvider
     */
    public function testProvider(): array
    {
        return [
            ["A", 50, 1],
            ["A", 100, 2],
            ["A", 130, 3],
            ["A", 180, 4],
            ["B", 45, 2],
            ["B", 30, 1],
            ["B", 75, 3],
            ["B", 45, 2],
            ["C", 20, 1],
            ["C", 38, 2],
            ["C", 50, 3],
            ["C", 88, 5],
            ["C", 70, 4],
            ["C", 100, 6],
            ["D", 15, 1],
            ["D", 45, 5, 3],
            ["E", 5, 1],
            ["E", 10, 2],
            ["E", 15, 3],
        ];
    }

    /**
     * To Get Final Price Of Item
     * @dataProvider testProvider
     */
    public function testCalculatePrice(string $ItemName, $ExpectedPrice, $ItemUnit, $TotalQuantityItemA = NULL): void
    {
     $Sdk = new Source\Sdk;
     $ActualPrice = $Sdk->PriceCalculation($ItemName, $ItemUnit, $TotalQuantityItemA);
     $this->assertEquals($ExpectedPrice, $ActualPrice);
    }
}
?>