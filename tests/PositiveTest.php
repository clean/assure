<?php namespace Test\Assure\Positive;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [1, 1],
            ['1', '1'],
            ['+1', '+1'],
            ['1.01', '1.01'],
            [0.01, 0.01],
            ['0.01', '0.01'],
            [true, true],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidPositive($given, $expected)
    {
        assure($given, 'positive');
        $this->assertEquals($expected, $given);
    }

    public function invalidData()
    {
        return [
            [0],
            [-1],
            ['-1'],
            ['-0.0001'],
            [-0.0001],
            [-0.000000000000000000000001],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInvalidPositive($given)
    {
        assure($given, 'positive');
    }
}
