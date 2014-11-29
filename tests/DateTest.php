<?php namespace Test\Assure\Date;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['1983-02-02'],
            ['12/15/1990'],
            ['now'],
            ['10 September 2000'],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given)
    {
        assure($given, 'date');
    }

    public function invalidData()
    {
        return [
            ["2"],
            ['15/11/1990'],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInvalidData($given)
    {
        assure($given, 'date');
    }
}
