<?php


namespace BlizzardGalaxy\ApiSupervisor\Registry;

use BlizzardGalaxy\ApiSupervisor\Exception\ApiSupervisorException;

/**
 * Offers methods for easily reading in configuration values.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Registry
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class FileSystemRegistryManager extends AbstractRegistryManager
{
    const CONFIG_FILE_PATH = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR;

    /**
     * Retrieve the API key used to make calls
     * to Battle.NET endpoints.
     *
     * @return string
     * @throws ApiSupervisorException
     */
    public function getApiKey()
    {
        $apiKey = @file_get_contents(self::CONFIG_FILE_PATH . 'apikey.lock');

        if (false === $apiKey) {
            throw new ApiSupervisorException('Could not load API key.');
        }

        return trim($apiKey);
    }
}
