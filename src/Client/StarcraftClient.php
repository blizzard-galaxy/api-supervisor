<?php


namespace BlizzardGalaxy\ApiSupervisor\Client;

use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder\LadderSummary;
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
     * @param int    $playerId     The ID of the player.
     * @param string $playerName   The name of the player.
     * @param int    $playerRegion Don't really know how this is used, always seems to default to 1.
     * @param null   $callback     Callback method.
     *
     * @return mixed
     */
    public function getPlayerProfile($playerId, $playerName, $playerRegion = 1, $callback = null)
    {
        $playerSummary = $this->getApiResponse(StarcraftApiMethod::PLAYER, [$playerId, $playerRegion, $playerName, null], $callback);
        $player        = $this->getSerializer()->deserialize($playerSummary, 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', 'json');

        return $player;
    }

    /**
     * Get the summary of the ladder, by specifying its ID.
     *
     * @param int $ladderId The ID of the Ladder.
     *
     * @return LadderSummary
     */
    public function getLadderSummaryById($ladderId)
    {
        return $this->getLadder([$ladderId]);
    }

    /**
     * Get the summary of the grandmaster ladder.
     *
     * @return LadderSummary
     */
    public function getLadderSummaryGrandmaster()
    {
        return $this->getLadder(['grandmaster']);
    }

    /**
     * Get the summary of the grandmaster ladder of last season.
     *
     * @return LadderSummary
     */
    public function getLadderSummaryGrandmasterLastSeason()
    {
        return $this->getLadder(['grandmaster', 'last']);
    }

    /**
     * Get the summary of a ladder.
     *
     * @param array $parameters The parameters for ladder summary retrieval.
     *
     * @return LadderSummary
     */
    protected function getLadder($parameters)
    {
        $ladderSummaryJson = $this->getApiResponse(StarcraftApiMethod::LADDER, $parameters);
        $ladderSummary     = $this->getSerializer()->deserialize($ladderSummaryJson, 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder\LadderSummary', 'json');

        return $ladderSummary;
    }
}
