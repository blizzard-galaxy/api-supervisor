<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Service;


use BlizzardGalaxy\ApiSupervisor\Enum;
use BlizzardGalaxy\ApiSupervisor\Exception\UrlBuilderException;
use BlizzardGalaxy\ApiSupervisor\Service\UrlBuilder;

class UrlBuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UrlBuilder
     */
    protected $urlBuilder;

    public function setUp()
    {
        parent::setUp();

        $this->urlBuilder = new UrlBuilder();
    }

    /**
     * @dataProvider urlResultDataProvider
     */
    public function testBuildWhenParametersAreValid($expectedResult, $region, $game, $method, $params, $apiKey, $locale, $callback, $protocol = 'https')
    {
        $actualResponse = $this->getUrlBuilder()->build($region, $game, $method, $params, $apiKey, $locale, $callback, $protocol);

        $this->assertNotNull($actualResponse, 'The URL generated is null.');
        $this->assertInternalType('string', $actualResponse, 'The URL generated is not a string.');
        $this->assertEquals($expectedResult, $actualResponse, 'The URL generated does not match the expected response');
    }

    /**
     * @param $region
     * @param $game
     * @param $params
     * @param $locale
     *
     * @expectedException \BlizzardGalaxy\ApiSupervisor\Exception\UrlBuilderException
     * @dataProvider urlInvalidParameter
     */
    public function testBuildWhenParametersAreInvalid($region, $game, $params, $locale)
    {
        $this->getUrlBuilder()->build($region, $game, 'test', $params, 'testKey', $locale, null, $protocol = 'https');
    }

    /**
     * @return array
     */
    public function urlResultDataProvider()
    {
        return [
            ['https://eu.api.battle.net/sc2/profile/1212/1/Test?locale=en_GB&callback=te&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::EN_GB, 'te'],
            ['https://eu.api.battle.net/sc2/profile/1212/1/Test?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://us.api.battle.net/sc2/profile/1212/1/Test?locale=en_US&apikey=testApiKey', Enum\Region::UNITED_STATES, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::EN_US, null],
            ['https://tw.api.battle.net/sc2/profile/1212/1/Test?locale=zh_TW&apikey=testApiKey', Enum\Region::TAIWAN, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::ZH_TW, null],
            ['https://sea.api.battle.net/sc2/profile/1212/1/Test?locale=en_US&apikey=testApiKey', Enum\Region::SOUTH_EAST_ASIA, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::EN_US, null],
            ['https://kr.api.battle.net/sc2/profile/1212/1/Test?locale=ko_KR&apikey=testApiKey', Enum\Region::KOREA, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::KO_KR, null],
            ['https://eu.api.battle.net/sc2/profile/1212/1/Test?locale=it_IT&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test'], 'testApiKey', Enum\Locale::IT_IT, null],
            ['https://eu.api.battle.net/sc2/profile/1212/1/Test/ladders?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test', 'ladders'], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://eu.api.battle.net/sc2/profile/1212/1/Test/matches?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER, [1212, 1, 'Test', 'matches'], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://eu.api.battle.net/sc2/ladder/5000?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::LADDER, [5000], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://eu.api.battle.net/sc2/ladder/grandmaster?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::LADDER, ['grandmaster'], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://eu.api.battle.net/sc2/ladder/grandmaster/last?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::LADDER, ['grandmaster', 'last'], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://eu.api.battle.net/sc2/achievements?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::ACHIEVEMENTS, [], 'testApiKey', Enum\Locale::EN_GB, null],
            ['https://eu.api.battle.net/sc2/rewards?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::REWARDS, [], 'testApiKey', Enum\Locale::EN_GB, null],
        ];
    }

    /**
     * @return array
     */
    public function urlInvalidParameter()
    {
        return [
            ['en', Enum\Game::STARCRAFT, ['test'], Enum\Locale::EN_GB],
            [Enum\Region::EUROPE, 'sc', ['test'], Enum\Locale::EN_GB],
            [Enum\Region::EUROPE, Enum\Game::STARCRAFT, ['test'], 'en_gb'],
            [Enum\Region::EUROPE, Enum\Game::STARCRAFT, ['test'], Enum\Locale::EN_US],
        ];
    }

    /**
     * @return UrlBuilder
     */
    public function getUrlBuilder()
    {
        return $this->urlBuilder;
    }


}
