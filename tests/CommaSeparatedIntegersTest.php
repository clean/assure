<?php namespace Test\Assure\CommaSeparatedIntegers;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['1,2,3,4', [1,2,3,4]],
            ['1', [1]],
            [1, [1]],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'commaSeparatedIntegers');
        $this->assertInternalType('array', $expected);
        $this->assertEquals($given, $expected);
    }
}
