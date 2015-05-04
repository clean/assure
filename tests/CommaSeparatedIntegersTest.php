<?php namespace Test\Assure\CommaSeparatedIntegers;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['1,2,3,4', [1,2,3,4]],
            ['1', [1]],
            ['1,', [1]],
            [',1', [1]],
            [1, [1]],
            [0, [0]],
            ['0', [0]],
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

    public function invalidData()
    {
        return [
            [[]],
            [null],
            [''],
            ['a,2,3,4'],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInValidData($given)
    {
        assure($given, 'commaSeparatedIntegers');
    }
}
