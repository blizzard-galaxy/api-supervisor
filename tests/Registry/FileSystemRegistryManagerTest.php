<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Registry;


use BlizzardGalaxy\ApiSupervisor\Registry\FileSystemRegistryManager;

class FileSystemRegistryManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FileSystemRegistryManager
     */
    protected $fileSystemRegistryManager;

    public function setUp()
    {
        $configFilePath                  = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config';
        $this->fileSystemRegistryManager = new FileSystemRegistryManager($configFilePath);
    }

    public function testGetApiKey()
    {
        $apiKey = $this->fileSystemRegistryManager->getApiKey();

        $this->assertNotNull($apiKey);
        $this->assertInternalType('string', $apiKey);
    }

    /**
     * @expectedException \League\Flysystem\FileNotFoundException
     */
    public function testGetApiKeyWhenInvalidConfigPath()
    {
        $fakePath                        = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
        $this->fileSystemRegistryManager = new FileSystemRegistryManager($fakePath);

        $this->fileSystemRegistryManager->getApiKey();
    }
}
