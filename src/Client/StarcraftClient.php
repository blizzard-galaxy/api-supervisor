<?php


namespace BlizzardGalaxy\ApiSupervisor\Client;

use GuzzleHttp\Client;
use BlizzardGalaxy\ApiSupervisor\Enum\Region;
use BlizzardGalaxy\ApiSupervisor\Exception\RegionException;


/**
 * Contains methods and configuration for consuming
 * the Starcraft II api.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Client
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class StarcraftClient extends AbstractClient
{
    public function getPlayerProfile($playerId, $playerName, $playerRegion = 1)
    {
        $guzzleClient = new Client();

        $url = "https://{$this->getRegion()}.api.battle.net/sc2/profile/{$playerId}/{$playerRegion}/{$playerName}/?locale={$this->getLocale()}&apikey={$this->getApiKey()}";
        $response = $guzzleClient->get($url);

        $content = $response->getBody()->getContents();
        $player = $this->getSerializer()->deserialize($content, 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player', 'json');

        var_dump($player);die;
    }
}
