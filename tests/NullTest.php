<?php namespace Test\Assure\Null;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [null],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given)
    {
        assure($given, 'null');
        $this->assertInternalType('null', $given);
    }
    
    public function invalidData()
    {
        return [
            [1],
            ['NULL'],
            ['null'],
            [false],
            [''],
        ];
    }

    /**
     * @dataProvider invalidData
     * @expectedException \InvalidArgumentException
     */
    public function testInValidData($given)
    {
        assure($given, 'null');
    }
}
