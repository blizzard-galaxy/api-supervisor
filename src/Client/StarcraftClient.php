<?php


namespace BlizzardGalaxy\ApiSupervisor\Client;

use BlizzardGalaxy\ApiSupervisor\Enum\Game;
use GuzzleHttp\Client;

/**
 * Contains methods and configuration for consuming
 * the Starcraft II api.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Client
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class StarcraftClient extends AbstractClient
{
    /**
     * Get the short code associated to the game for URL
     * construction. (i.e. Starcraft II is sc2)
     *
     * Please use the enums for the game in order to pass
     * validation.
     *
     * @return string
     */
    public function getGameShortCode()
    {
        return Game::STARCRAFT;
    }

    /**
     * @param      $playerId
     * @param      $playerName
     * @param null $region
     * @param null $locale
     * @param null $callback
     * @param int  $playerRegion
     */
    public function getPlayerProfile($playerId, $playerName, $region = null, $locale = null, $callback = null, $playerRegion = 1)
    {
        $guzzleClient = new Client();

        $url = "https://{$this->getRegion()}.api.battle.net/sc2/profile/{$playerId}/{$playerRegion}/{$playerName}/?locale={$this->getLocale()}&apikey={$this->getApiKey()}";
        $response = $guzzleClient->get($url);

        $content = $response->getBody()->getContents();
        $player = $this->getSerializer()->deserialize($content, 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', 'json');
    }
}
