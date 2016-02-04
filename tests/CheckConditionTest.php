<?php namespace Test\Assure\CheckCondition;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [1, '==', '1'],
            [2, '>', '1'],
            [2, '<', 2.1],
            [2, '>=', 2],
            [2, '<=', 4],
            [2, '!=', 4],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($value, $operator, $operand)
    {
        $this->assertTrue(\Assure\checkCondition($value, $operator, $operand));
    }

    public function invalidData()
    {
        return [
            [1, '===', '1'],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInValidData($value, $operator, $operand)
    {
        $this->assertTrue(\Assure\checkCondition($value, $operator, $operand));
    }
}
