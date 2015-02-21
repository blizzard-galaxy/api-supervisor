<?php


namespace BlizzardGalaxy\ApiSupervisor\Client;

use BlizzardGalaxy\ApiSupervisor\Enum\Locale;
use BlizzardGalaxy\ApiSupervisor\Enum\Region;
use BlizzardGalaxy\ApiSupervisor\Exception\RegionException;
use BlizzardGalaxy\ApiSupervisor\Service\DataSerializer;
use JMS\Serializer\Serializer;

/**
 * Contains methods and configuration for consuming
 * the various Blizzard APIs.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Client
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
abstract class AbstractClient
{
    public function __construct($apiKey, $region)
    {
        $this
            ->setApiKey($apiKey)
            ->setRegion($region);
    }

    /**
     * @var string
     */
    protected $locale = Locale::EN_GB;

    /**
     * @var string
     */
    protected $region;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * Get the short code associated to the game for URL
     * construction. (i.e. Starcraft II is sc2)
     *
     * Please use the enums for the game in order to pass
     * validation.
     *
     * @return string
     */
    abstract public function getGameShortCode();

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @return $this
     * @throws RegionException
     */
    public function setRegion($region)
    {
        if (!in_array($region, Region::getAllRegionsAsArray())) {
            throw new RegionException();
        }

        $this->region = $region;

        return $this;
    }

    /**
     * @return Serializer
     */
    public function getSerializer()
    {
        if (null === $this->serializer) {
            $this->setSerializer(DataSerializer::getFreshInstance());
        }

        return $this->serializer;
    }

    /**
     * @param Serializer $serializer
     *
     * @return $this
     */
    public function setSerializer($serializer)
    {
        $this->serializer = $serializer;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }


}
