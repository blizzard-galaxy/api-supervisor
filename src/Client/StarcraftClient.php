<?php


namespace BlizzardGalaxy\ApiSupervisor\Client;

use BlizzardGalaxy\ApiSupervisor\Enum\Game;
use BlizzardGalaxy\ApiSupervisor\Enum\Method\StarcraftApiMethod;

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
     * Get the profile summary of a player.
     *
     * @param int    $playerId The ID of the player.
     * @param string $playerName The name of the player.
     * @param int    $playerRegion Don't really know how this is used, always seems to default to 1.
     * @param null   $callback Callback method.
     *
     * @return mixed
     */
    public function getPlayerProfile($playerId, $playerName, $playerRegion = 1, $callback = null)
    {
        $playerSummary = $this->makeApiCall(StarcraftApiMethod::PLAYER, [$playerId, $playerRegion, $playerName, null], $callback);
        $player        = $this->getSerializer()->deserialize($playerSummary, 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', 'json');

        return $player;
    }
}
