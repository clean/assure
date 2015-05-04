<?php namespace Test\Assure\ArrayOfStrings;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['a', ['a']],
            ['-', ['-']],
            [['one', 'two'], ['one', 'two']],
            [(object)['one', 'two'], ['one', 'two']],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'arrayOfStrings');
        $this->assertInternalType('array', $expected);
        $this->assertEquals($given, $expected);
    }

    public function invalidData()
    {
        return [
            [[]],
            [null],
            [1],
            [[1,'a']],
            [(object)[1,'a']],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInValidData($given)
    {
        assure($given, 'arrayOfStrings');
    }
}
