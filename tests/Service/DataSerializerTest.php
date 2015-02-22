<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Service;


use BlizzardGalaxy\ApiSupervisor\Service\DataSerializer;

class DataSerializerTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFreshInstance()
    {
        $jmsInstance = DataSerializer::getFreshInstance();

        $this->assertNotNull($jmsInstance);
        $this->assertInstanceOf('JMS\Serializer\Serializer', $jmsInstance, 'Serializer instance not an instance of JMS Serializer.');

        /* Check that the Annotation Registry works correctly. */
        $mockFilePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'mocks' . DIRECTORY_SEPARATOR . 'starcraft' . DIRECTORY_SEPARATOR . 'player.json';
        $mockFile = @file_get_contents($mockFilePath);

        if (false === $mockFile) {
            throw new \Exception('Mock file path is not valid.');
        }

        $player = $jmsInstance->deserialize($mockFile, 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', 'json');
        $this->assertNotNull($player);
        $this->assertInstanceOf('BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', $player);
    }
}
