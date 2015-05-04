<?php namespace Test\Assure\SortedArray;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [[1,2,3], [1,2,3]],
            [['a','b',1,2,3], ['a','b',1,2,3]],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'sortedArray');
        $this->assertEquals($given, $expected);
    }

    public function invalidData()
    {
        return [
            [null],
            [2,1],
            ['b','a'],
            [1,2,3,'a','b'],
        ];
    }

    /**
     * @dataProvider invalidData
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidData($given)
    {
        assure($given, 'sortedArray');
    }
}
