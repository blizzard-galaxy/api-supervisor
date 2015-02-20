<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Entity\Client;


use BlizzardGalaxy\ApiSupervisor\Client\StarcraftClient;
use BlizzardGalaxy\ApiSupervisor\Enum\Region;

class StarcraftClientTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPlayerProfile()
    {
        $apiKey = @file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "apikey.lock");

        if (false === $apiKey) {
            throw new \Exception("API key has not been defined for the tests - please add in /config/apikey.lock");
        }

        $apiKey = trim($apiKey);

        $starcraftClient = new StarcraftClient($apiKey, Region::EUROPE);
        $starcraftClient->getPlayerProfile(2048419, "LionHeart");
    }
}
