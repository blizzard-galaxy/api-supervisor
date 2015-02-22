<?php


namespace BlizzardGalaxy\ApiSupervisor\Registry;

use BlizzardGalaxy\ApiSupervisor\Exception\ApiSupervisorException;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

/**
 * Offers methods for easily reading in configuration values.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Registry
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class FileSystemRegistryManager extends AbstractRegistryManager
{
    /**
     * @var Filesystem
     */
    protected $fileSystem;

    public function __construct($configFilePath)
    {
        $this->fileSystem = new Filesystem(new Local($configFilePath));
    }

    /**
     * Retrieve the API key used to make calls
     * to Battle.NET endpoints.
     *
     * @return string
     * @throws ApiSupervisorException
     */
    public function getApiKey()
    {
        $apiKey = $this->getFileSystem()->read('apikey.lock');
        return trim($apiKey);
    }

    /**
     * @return Filesystem
     */
    public function getFileSystem()
    {
        return $this->fileSystem;
    }
}
