<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Client;

use BlizzardGalaxy\ApiSupervisor\Client\StarcraftClient;
use BlizzardGalaxy\ApiSupervisor\Enum\Locale;
use BlizzardGalaxy\ApiSupervisor\Enum\Method\StarcraftApiMethod;
use BlizzardGalaxy\ApiSupervisor\Enum\Region;

/**
 * Class StarcraftClientTest
 *
 * @package BlizzardGalaxy\ApiSupervisor\Test\Client
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class StarcraftClientTest extends AbstractClientTest
{
    /**
     * @var StarcraftClient
     */
    protected $starcraftClient;

    public function setUp()
    {
        parent::setUp();

        $this->starcraftClient = new StarcraftClient($this->getApiKey(), Region::EUROPE, Locale::EN_GB);
    }

    /**
     * @param string $method
     * @param array  $parameters
     * @param string $callback
     *
     * @dataProvider apiMethodDataProvider
     */
    public function testCheckThatAllApiMethodsCanBeReached($method, $parameters, $callback = null)
    {
        $response = $this->starcraftClient->makeApiCall($method, $parameters, $callback);

        $this->assertNotNull($response);
        $this->assertEquals($response->getStatusCode(), 200, 'Request was not successful');
        $this->assertNotNull($response->getBody()->getContents());
        $this->assertGreaterThan(0, $response->getBody()->getSize());
        $this->assertJson($response->getBody()->getContents());
    }

    public function apiMethodDataProvider()
    {
        return [
            [StarcraftApiMethod::PLAYER, [2048419, 1, 'LionHeart', null]],
            [StarcraftApiMethod::PLAYER, [2048419, 1, 'LionHeart', 'ladders']],
            [StarcraftApiMethod::PLAYER, [2048419, 1, 'LionHeart', 'matches']],
            [StarcraftApiMethod::LADDER, [3000]],
            [StarcraftApiMethod::LADDER, ['grandmaster']],
            [StarcraftApiMethod::LADDER, ['grandmaster/last']],
            [StarcraftApiMethod::ACHIEVEMENTS, []],
            [StarcraftApiMethod::REWARDS, []],
        ];
    }

    /**
     * @expectedException \BlizzardGalaxy\ApiSupervisor\Exception\ApiSupervisorException
     * @expectedExceptionCode 403
     */
    public function testInvalidApiKey()
    {
        $this->starcraftClient->setApiKey('test');
        $this->starcraftClient->makeApiCall(StarcraftApiMethod::PLAYER, [2048419, 1, 'LionHeart', null]);
    }

    public function testGetPlayerProfile()
    {
        $playerProfile = $this->starcraftClient->getPlayerProfile(2048419, 'LionHeart');

        $this->assertNotNull($playerProfile, 'The data retrieved from the API was null.');
        $this->assertInstanceOf('BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', $playerProfile, 'The processed data does not match the expected format.');
    }
}
