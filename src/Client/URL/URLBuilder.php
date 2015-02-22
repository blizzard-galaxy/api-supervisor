<?php


namespace BlizzardGalaxy\ApiSupervisor\Client\URL;

use BlizzardGalaxy\ApiSupervisor\Enum;
use BlizzardGalaxy\ApiSupervisor\Exception\URLBuilderException;
use BlizzardGalaxy\ApiSupervisor\Service\RegionLocaleValidator;

/**
 * Handles construction of URLs pointing to the Battle.NET API.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Service
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class URLBuilder
{
    /**
     * @var RegionLocaleValidator
     */
    protected $regionLocaleValidator;

    const API_HOST = 'api.battle.net';

    /**
     * Build a URL to a specific Battle.NET API endpoint.
     *
     * @param string $region
     * @param string $game
     * @param string $method
     * @param array  $params
     * @param string $apiKey
     * @param string $locale
     * @param string $callback
     * @param string $protocol
     *
     * @return string
     * @throws URLBuilderException
     */
    public function build($region, $game, $method, $params, $apiKey, $locale, $callback, $protocol = 'https')
    {
        $this->checkIfInputDataIsValid($region, $game, $locale);
        $urlPreparedParams = implode('/', $params);
        $apiHost = self::API_HOST;

        $apiUrl = "{$protocol}://{$region}.{$apiHost}/{$game}/{$method}";

        if (null !== $urlPreparedParams && count($params) > 0) {
            $apiUrl .= "/{$urlPreparedParams}";
        }

        $apiUrl .= "?locale={$locale}";

        if (null !== $callback) {
            $apiUrl .= "&callback={$callback}";
        }

        $apiUrl .= "&apikey={$apiKey}";

        return trim($apiUrl);
    }

    /**
     * @return RegionLocaleValidator
     */
    public function getRegionLocaleValidator()
    {
        if (null === $this->regionLocaleValidator) {
            $this->setRegionLocaleValidator(new RegionLocaleValidator());
        }

        return $this->regionLocaleValidator;
    }

    /**
     * @param RegionLocaleValidator $regionLocaleValidator
     *
     * @return $this
     */
    public function setRegionLocaleValidator($regionLocaleValidator)
    {
        $this->regionLocaleValidator = $regionLocaleValidator;

        return $this;
    }

    /**
     * Check if the input provided is correct, and make sure that the URL makes sense
     * in terms of region and location business rules.
     *
     * @param string $region
     * @param string $game
     * @param string $locale
     *
     * @return bool
     * @throws \Exception
     */
    protected function checkIfInputDataIsValid($region, $game, $locale)
    {
        if (!$this->getRegionLocaleValidator()->enumValueIsInArray($region, Enum\Region::getAllAsArray())) {
            throw new URLBuilderException("Provided region is not correct.");
        }

        if (!$this->getRegionLocaleValidator()->enumValueIsInArray($game, Enum\Game::getAllAsArray())) {
            throw new URLBuilderException("Provided game is not correct.");
        }

        if (!$this->getRegionLocaleValidator()->enumValueIsInArray($locale, Enum\Locale::getAllAsArray())) {
            throw new URLBuilderException("Provided locale is not correct.");
        }

        if (!$this->getRegionLocaleValidator()->localeIsAssignedToCorrectRegion($region, $locale)) {
            throw new URLBuilderException("Locale is not assigned to this region");
        }

        return true;
    }
}
