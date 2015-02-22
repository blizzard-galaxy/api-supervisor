<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Client;


use BlizzardGalaxy\ApiSupervisor\Client\StarcraftClient;
use BlizzardGalaxy\ApiSupervisor\Enum\Locale;
use BlizzardGalaxy\ApiSupervisor\Enum\Region;
use BlizzardGalaxy\ApiSupervisor\Registry\FileSystemRegistryManager;

class StarcraftClientTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPlayerProfile()
    {
        $fileSystemRegistryManager = new FileSystemRegistryManager();
        $apiKey                    = $fileSystemRegistryManager->getApiKey();

        $starcraftClient = new StarcraftClient($apiKey, Region::EUROPE, Locale::EN_GB);
        $playerProfile   = $starcraftClient->getPlayerProfile(2048419, "LionHeart");

        $this->assertNotNull($playerProfile, 'The data retrieved from the API was null.');
        $this->assertInstanceOf('BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', $playerProfile, 'The processed data does not match the expected format.');
    }
}
