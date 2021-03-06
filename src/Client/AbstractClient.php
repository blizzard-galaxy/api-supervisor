<?php


namespace BlizzardGalaxy\ApiSupervisor\Client;

use BlizzardGalaxy\ApiSupervisor\Client\URL\URLBuilder;
use BlizzardGalaxy\ApiSupervisor\Exception\ApiSupervisorException;
use BlizzardGalaxy\ApiSupervisor\Service\DataSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
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
    public function __construct($apiKey, $region, $locale)
    {
        $this
            ->setApiKey($apiKey)
            ->setRegion($region)
            ->setLocale($locale);
    }

    /**
     * @var string
     */
    protected $locale;

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
     * @var Client
     */
    protected $guzzleClient;

    /**
     * @var URLBuilder
     */
    protected $urlBuilder;

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
     * Get the response of an API call to a Battle.NET endpoint.
     *
     * @param string $method
     * @param array  $parameters
     * @param string $callback
     *
     * @return string
     */
    public function getApiResponse($method, $parameters = [], $callback = null)
    {
        $response = $this->makeApiCall($method, $parameters, $callback);

        return $response->getBody()->getContents();
    }

    /**
     * @param       $method
     * @param array $parameters
     * @param       $callback
     *
     * @return \GuzzleHttp\Message\FutureResponse|\GuzzleHttp\Message\ResponseInterface|\GuzzleHttp\Ring\Future\FutureInterface|null
     * @throws ApiSupervisorException
     */
    public function makeApiCall($method, array $parameters, $callback = null)
    {
        try {
            $url      = $this->getUrlBuilder()->build($this->getRegion(), $this->getGameShortCode(), $method, $parameters, $this->getApiKey(), $this->getLocale(), $callback);
            $response = $this->getGuzzleClient()->get($url);
        } catch (ClientException $exception) {
            throw new ApiSupervisorException($exception->getMessage(), $exception->getCode());
        }

        return $response;
    }

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
     */
    public function setRegion($region)
    {
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
     * @throws ApiSupervisorException
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

    /**
     * @return Client
     */
    public function getGuzzleClient()
    {
        if (null === $this->guzzleClient) {
            $this->setGuzzleClient(new Client());
        }

        return $this->guzzleClient;
    }

    /**
     * @param Client $guzzleClient
     *
     * @return $this
     */
    public function setGuzzleClient($guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;

        return $this;
    }

    /**
     * @return URLBuilder
     */
    public function getUrlBuilder()
    {
        if (null === $this->urlBuilder) {
            $this->setUrlBuilder(new URLBuilder());
        }

        return $this->urlBuilder;
    }

    /**
     * @param URLBuilder $urlBuilder
     *
     * @return $this
     */
    public function setUrlBuilder($urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;

        return $this;
    }


}
