<?php


namespace BlizzardGalaxy\ApiSupervisor\Service;

use BlizzardGalaxy\ApiSupervisor\Enum;
use BlizzardGalaxy\ApiSupervisor\Exception\UrlBuilderException;

/**
 * Class UrlBuilder
 *
 * @package BlizzardGalaxy\ApiSupervisor\Service
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class UrlBuilder
{
    /**
     * @var EnumValidator
     */
    protected $enumValidator;

    public function build($region, $game, $method, $params, $apiKey, $locale, $callback, $port = 'https')
    {
        $this->checkIfInputDataIsValid($region, $game, $locale, $params);
        $urlPreparedParams = implode('/', $params);

        $apiUrl = "{$port}://{$region}.api.battle.net/{$game}/{$method}/{$urlPreparedParams}/?locale={$locale}";

        if (null !== $callback) {
            $apiUrl .= "&callback={$callback}";
        }

        $apiUrl .= "&apikey={$apiKey}";

        return $apiUrl;
    }

    /**
     * @return EnumValidator
     */
    public function getEnumValidator()
    {
        if (null === $this->enumValidator) {
            $this->setEnumValidator(new EnumValidator());
        }

        return $this->enumValidator;
    }

    /**
     * @param EnumValidator $enumValidator
     *
     * @return $this
     */
    public function setEnumValidator($enumValidator)
    {
        $this->enumValidator = $enumValidator;

        return $this;
    }

    /**
     * @param $region
     * @param $game
     * @param $locale
     *
     * @throws \Exception
     */
    protected function checkIfInputDataIsValid($region, $game, $locale, $params)
    {
        if (!$this->getEnumValidator()->enumValueIsInArray($region, Enum\Region::getAllAsArray())) {
            throw new UrlBuilderException("Provided region is not correct.");
        }

        if (!$this->getEnumValidator()->enumValueIsInArray($game, Enum\Game::getAllAsArray())) {
            throw new UrlBuilderException("Provided game is not correct.");
        }

        if (!$this->getEnumValidator()->enumValueIsInArray($locale, Enum\Locale::getAllAsArray())) {
            throw new UrlBuilderException("Provided locale is not correct.");
        }

        if (0 === count($params)) {
            throw new UrlBuilderException("Empty parameter list has been provided.");
        }
    }
}
