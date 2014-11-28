<?php namespace Test\Assure\ArrayOfIntegers;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [1, [1]],
            [[1,2], [1,2]],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'arrayOfIntegers');
        $this->assertInternalType('array', $expected);
        $this->assertEquals($given, $expected);
    }
}
