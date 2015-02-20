<?php

namespace BlizzardGalaxy\ApiSupervisor\Test\Entity;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;

/**
 * Base class to be extended by test classes where entity serialization needs to be checked.
 * Defines similar workflow for testing multiple entity types, only need to overwrite abstract methods.
 *
 * @author Petre Pătrașc <petre@dreamlabs.ro>
 */
abstract class AbstractSerializationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Return a JSON representation of an API response.
     *
     * @return string
     */
    abstract protected function getMockFile();

    /**
     * Return the object instance that is being tested.
     *
     * @return ApiSupervisorEntityInterface
     */
    abstract protected function getExpectedObject();

    /**
     * Return the class path of the object being tested.
     *
     * @return string
     */
    abstract protected function getObjectClassPath();

    /**
     * Main deserialization test method for child classes.
     */
    public function testDeserialization()
    {
        $jsonInput        = $this->readMockJson();
        $classPath        = $this->getObjectClassPath();
        $expectedResponse = $this->getExpectedObject();

        /** @var ApiSupervisorEntityInterface $actualResponse */
        $actualResponse = $this->getSerializerInstance()->deserialize($jsonInput, $classPath, 'json');

        $this->assertEquals($expectedResponse, $actualResponse, "Deserialization did not produce expected results for {$classPath}");
    }

    /**
     * Retrieve an instance of the JMS Serializer.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getSerializerInstance()
    {
        $jmsPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . "/vendor/jms/serializer/src";
        AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation', $jmsPath);

        return SerializerBuilder::create()->build();
    }

    /**
     * Retrieve the deserialization format.
     *
     * @return string
     */
    protected function getDeserializationFormat()
    {
        return 'json';
    }

    /**
     * Read the defined mock JSON file.
     *
     * @return string
     * @throws \Exception
     */
    protected function readMockJson()
    {
        $filename  = $this->getMockFile();
        $filepath  = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'mocks' . DIRECTORY_SEPARATOR . $filename;
        $jsonInput = @file_get_contents($filepath);

        if (false === $jsonInput) {
            throw new \Exception('Mock filename incorrectly defined.');
        }

        return $jsonInput;
    }
}