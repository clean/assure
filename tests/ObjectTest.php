<?php namespace Test\Assure\Object;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function testValidObject()
    {
        $given = new \stdClass;
        $given->one = 1;
        $given->two = 2;

        assure($given, 'object');

        $this->assertInternalType('object', $given);
        $this->assertEquals(1, $given->one);
        $this->assertEquals(2, $given->two);
    }

    public function testArrayAsAnObject()
    {
        $given = [
            'one' => 1,
            'two' => 2,
        ];

        assure($given, 'object');

        $this->assertInternalType('object', $given);
        $this->assertEquals(1, $given->one);
        $this->assertEquals(2, $given->two);
    }

    public function invalidData()
    {
        return [
            [1],
            ['string'],
            [false],
            [true],
            [[1,2]],
            [['one','two']],
        ];
    }
    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidData
     */
    public function testInvalidObject($given)
    {
        assure($given, 'object');
    }
}
