<?php namespace Test\Assure\String;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validStrings()
    {
        return [
            ['TestString', 'TestString'],
            [1, '1'],
            ['10', '10'],
            [new StringObject, 'StringObject'],
        ];
    }

    /**
     * @dataProvider validStrings
     */
    public function testValidStrings($given, $expected)
    {
        assure($given, 'string');
        $this->assertEquals($given, $expected);
        $this->assertInternalType('string', $expected);
    }

    public function invalidStrings()
    {
        return [
            [null],
            [[]],
            [new \stdClass]
        ];
    }


    /**
     * @dataProvider invalidStrings
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidStrings($given)
    {
        assure($given, 'string');
    }
}

class StringObject
{
    public function __toString()
    {
        return 'StringObject';
    }
}
