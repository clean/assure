<?php namespace Test\Assure\Integer;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            [1, 1],
            [-1, -1],
            ['-1', -1],
            ['10', 10],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'integer');
        $this->assertEquals($given, $expected);
        $this->assertInternalType('integer', $expected);
    }

    public function invalidData()
    {
        return [
            [null],
            [1.1],
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
        assure($given, 'integer');
    }

    public function testCheckConditionValid()
    {
        $given = 10;
        assure($given, 'integer <= 10');
        assure($given, 'integer > 9');
        assure($given, 'integer >= 10');
        assure($given, 'integer >= 1');
        assure($given, 'integer < 11');
        assure($given, 'integer == 10');
        assure($given, 'integer != 0');
        $this->assertInternalType('integer', $given);
    }

    public function invalidCondition()
    {
        return [
            [10, 'integer <= 9'],
            [10, 'integer > 10'],
            [10, 'integer < 9'],
            [10, 'integer != 10'],
            [10, 'integer == 0'],
            [10, 'integer >= 100'],
            ['10', 'integer >= 100'],
        ];
    }

    /**
     * @dataProvider invalidCondition
     * @expectedException \InvalidArgumentException
     */
    public function testCheckConditionInValid($given, $condition)
    {
        assure($given, $condition);
    }
}
