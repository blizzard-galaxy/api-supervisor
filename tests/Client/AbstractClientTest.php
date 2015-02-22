<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Client;


use BlizzardGalaxy\ApiSupervisor\Registry\FileSystemRegistryManager;
use BlizzardGalaxy\ApiSupervisor\Test\TestParameter;

/**
 * Handles abstraction of client tests.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Test\Client
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
abstract class AbstractClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Return the API key to be used in the endpoint.
     *
     * @return string
     */
    public function getApiKey()
    {
        $fileSystemRegistryManager = new FileSystemRegistryManager(TestParameter::CONFIG_FILEPATH);
        $apiKey                    = $fileSystemRegistryManager->getApiKey();

        return $apiKey;
    }
}
