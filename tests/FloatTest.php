<?php namespace Test\Assure\Float;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [1.1, 1.1],
            [1, 1.0],
            ['1', 1.0],
            ['10.1', 10.1],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'float');
        $this->assertEquals($given, $expected);
        $this->assertInternalType('float', $expected);
    }

    public function invalidData()
    {
        return [
            [null],
            ['one'],
            [false],
            [[]],
            [new \stdClass]
        ];
    }

    /**
     * @dataProvider invalidData
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidData($given)
    {
        assure($given, 'float');
    }
}
