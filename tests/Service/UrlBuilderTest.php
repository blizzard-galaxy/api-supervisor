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
     *
     */
    public function urlResultDataProvider()
    {
        return array(
            array('https://eu.api.battle.net/sc2/profile/1212/1/Test/?locale=en_GB&callback=te&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER_PROFILE, array(1212, 1, 'Test'), 'testApiKey', Enum\Locale::EN_GB, 'te'),
            array('https://eu.api.battle.net/sc2/profile/1212/1/Test/?locale=en_GB&apikey=testApiKey', Enum\Region::EUROPE, Enum\Game::STARCRAFT, Enum\Method\StarcraftApiMethod::PLAYER_PROFILE, array(1212, 1, 'Test'), 'testApiKey', Enum\Locale::EN_GB, null),
        );
    }

    /**
     *
     */
    public function urlInvalidParameter()
    {
        return array(
            array('en', Enum\Game::STARCRAFT, array('test'), Enum\Locale::EN_GB),
            array(Enum\Region::EUROPE, 'sc', array('test'), Enum\Locale::EN_GB),
            array(Enum\Region::EUROPE, Enum\Game::STARCRAFT, array(), Enum\Locale::EN_GB),
            array(Enum\Region::EUROPE, Enum\Game::STARCRAFT, array('test'), 'en_gb'),
            array(Enum\Region::EUROPE, Enum\Game::STARCRAFT, array('test'), Enum\Locale::EN_US),
        );
    }

    /**
     * @return UrlBuilder
     */
    public function getUrlBuilder()
    {
        return $this->urlBuilder;
    }


}
