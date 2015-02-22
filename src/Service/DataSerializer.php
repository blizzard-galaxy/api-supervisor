<?php


namespace BlizzardGalaxy\ApiSupervisor\Service;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;

/**
 * Handles the creation of fresh JMS serializer instances
 * and the registration of annotations.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Service
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DataSerializer
{
    /**
     * Get a new fresh instance of the serializer used for
     * mapping the API values.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function getFreshInstance()
    {
        $jmsPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . "/vendor/jms/serializer/src";
        AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation', $jmsPath);

        return SerializerBuilder::create()->build();
    }
}
