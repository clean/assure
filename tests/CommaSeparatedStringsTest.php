<?php namespace Test\Assure\CommaSeparatedStrings;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['1,2,3,4', [1,2,3,4]],
            ['a,b,c', ['a','b','c']],
            ['one,two', ['one','two']],
            ['1adb-)(*^&%$##,test', ['1adb-)(*^&%$##','test']],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'commaSeparatedStrings');
        $this->assertInternalType('array', $expected);
        $this->assertEquals($given, $expected);
    }
}
