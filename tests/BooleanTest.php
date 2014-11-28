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
            ["on", true],
            ["off", false],
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
}
