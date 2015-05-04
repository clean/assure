<?php namespace Test\Assure\SortDirection;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validStrings()
    {
        return [
            ['asc', 'ASC'],
            ['desc', 'DESC'],
            ['ASC', 'ASC'],
            ['DESC', 'DESC'],
        ];
    }

    /**
     * @dataProvider validStrings
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'sortDirection');
        $this->assertEquals($given, $expected);
    }

    public function invalidStrings()
    {
        return [
            [null],
            [1],
            ['abc'],
            ['ASCENDING'],
            ['DESCENDING'],
            ['>'],
            ['<'],
            [[]],
            [new \stdClass]
        ];
    }

    /**
     * @dataProvider invalidStrings
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidData($given)
    {
        assure($given, 'sortDirection');
    }
}
