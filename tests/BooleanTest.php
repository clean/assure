<?php namespace Test\Assure\Boolean;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [true, true],
            [false, false],
            [1, true],
            [0, false],
            ["true", true],
            ["false", false],
            ["TRUE", true],
            ["FALSE", false],
            ["True", true],
            ["False", false],
            ["on", true],
            ["off", false],
            ["ON", true],
            ["OFF", false],
            ["YES", true],
            ["NO", false],
            ["yes", true],
            ["no", false],
            ['falsE', false],
            ['truE', true],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'boolean');
        $this->assertInternalType('boolean', $expected);
        $this->assertEquals($given, $expected);
    }

    public function invalidData()
    {
        return [
            ["2"],
            [2],
            [new \stdClass],
            ['a'],
            ['one'],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInvalidData($given)
    {
        assure($given, 'boolean');
    }
}
