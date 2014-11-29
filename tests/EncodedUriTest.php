<?php namespace Test\Assure\EncodedUri;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function validData()
    {
        return [
            ['/en/', '/en/'],
            [
                '/fr/news/31/angleterre/2014/03/14/4683632/arsenal-özil-absent-3-semaines-minimum-selon-wenger',
                '/fr/news/31/angleterre/2014/03/14/4683632/arsenal-%C3%B6zil-absent-3-semaines-minimum-selon-wenger'
            ],
            [
                '/jp/news/183/ヨーロッパリーグ/2014/03/14/4683864/ポルト暫定監督本来なら２０の勝利だった',
                '/jp/news/183/%E3%83%A8%E3%83%BC%E3%83%AD%E3%83%83%E3%83%91%E3%83%AA%E3%83%BC%E3%82%B0/2014/03/14/4683864/%E3%83%9D%E3%83%AB%E3%83%88%E6%9A%AB%E5%AE%9A%E7%9B%A3%E7%9D%A3%E6%9C%AC%E6%9D%A5%E3%81%AA%E3%82%89%EF%BC%92%EF%BC%90%E3%81%AE%E5%8B%9D%E5%88%A9%E3%81%A0%E3%81%A3%E3%81%9F'
            ],
        ];
    }

    /**
     * @dataProvider validData
     */
    public function testValidData($given, $expected)
    {
        assure($given, 'encodedUri');
        $this->assertEquals($given, $expected);
    }
}
