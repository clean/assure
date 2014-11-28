<?php namespace Test\Assure\ArrayOfStrings;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['a', ['a']],
            [['one', 'two'], ['one', 'two']],
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
}
