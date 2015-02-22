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
        $this->fileSystemRegistryManager = new FileSystemRegistryManager();
    }

    public function testGetApiKey()
    {
        $apiKey = $this->fileSystemRegistryManager->getApiKey();

        $this->assertNotNull($apiKey);
        $this->assertInternalType('string', $apiKey);
    }

    /**
     * @expectedException \BlizzardGalaxy\ApiSupervisor\Exception\ApiSupervisorException
     */
    public function testGetApiKeyWhenInvalidConfigPath()
    {
        $fileSystemMock =
            $this->getMockBuilder('BlizzardGalaxy\ApiSupervisor\Registry\FileSystemRegistryManager')
                ->setMethods(['getConfigFilePath'])
                ->getMock();
        $fileSystemMock->expects($this->atLeastOnce())->method('getConfigFilePath')->willReturn(__DIR__);

        $fileSystemMock->getApiKey();
    }
}
