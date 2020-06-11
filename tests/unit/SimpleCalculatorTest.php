<?php

class SimpleCalculatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @dataProvider addNumberProvider()
     */
    public function it_adds_two_numbers($firstNumber, $secondNumber, $expectedResult): void
    {
        $simpleCalculator = new \App\SimpleCalculator();
        $actualResult = $simpleCalculator->add($firstNumber, $secondNumber);

        $this->assertEquals($expectedResult, $actualResult, 'Result is correct');
    }

    public function addNumberProvider(): array
    {
        return [
            [2, 2, 4],
            [10, 5, 15]
        ];
    }
}
