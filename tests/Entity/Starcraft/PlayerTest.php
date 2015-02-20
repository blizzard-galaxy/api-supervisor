<?php

namespace BlizzardGalaxy\ApiSupervisor\Test\Entity\Starcraft;

use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Portrait;
use BlizzardGalaxy\ApiSupervisor\Test\Entity\AbstractSerializationTest;
use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

/**
 * Class PlayerTest
 *
 * @package BlizzardGalaxy\ApiSupervisor\Test\Entity\Starcraft
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class PlayerTest extends AbstractSerializationTest
{
    /**
     * Return a JSON representation of an API response.
     *
     * @return string
     */
    protected function getMockFile()
    {
        return 'starcraft/player.json';
    }

    /**
     * Return the object instance that is being tested.
     *
     * @return ApiSupervisorEntityInterface
     */
    protected function getExpectedObject()
    {
        $portrait = $this->getExpectedPortrait();
        $careerSummary = $this->getExpectedCareerSummary();
        $swarmLevelSummary = $this->getExpectedSwarmLevelSummary();

        $player = new Player();
        $player
            ->setBlizzardId(2048419)
            ->setRealm(1)
            ->setDisplayName('LionHeart')
            ->setClanName('Cegeka Guild')
            ->setClanTag('CGK')
            ->setProfilePath('/profile/2048419/1/LionHeart/')
            ->setPortrait($portrait)
            ->setCareerSummary($careerSummary)
            ->setSwarmLevelSummary($swarmLevelSummary);

        return $player;
    }

    /**
     * Return the class path of the object being tested.
     *
     * @return string
     */
    protected function getObjectClassPath()
    {
        return 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player';
    }

    /**
     * @return Portrait
     */
    private function getExpectedPortrait()
    {
        $portrait = new Portrait();
        $portrait
            ->setXCoordinate(-270)
            ->setYCoordinate(-180)
            ->setHeight(90)
            ->setWidth(90)
            ->setOffset(15)
            ->setUrl('http://media.blizzard.com/sc2/portraits/1-90.jpg');

        return $portrait;
    }

    /**
     * @return Player\CareerSummary
     */
    private function getExpectedCareerSummary()
    {
        $careerSummary = new Player\CareerSummary();
        $careerSummary
            ->setPrimaryRace('TERRAN')
            ->setTerranWins(0)
            ->setProtossWins(0)
            ->setZergWins(0)
            ->setHighest1v1Rank('PLATINUM')
            ->setHighestTeamRank('DIAMOND')
            ->setSeasonTotalGames(0)
            ->setCareerTotalGames(1676);

        return $careerSummary;
    }

    /**
     * @return Player\SwarmLevelSummary
     */
    private function getExpectedSwarmLevelSummary()
    {
        $terranSwarmLevel = new Player\SwarmLevel();
        $terranSwarmLevel
            ->setLevel(35)
            ->setTotalLevelXp(5850000)
            ->setCurrentLevelXp(-1);

        $zergSwarmLevel = new Player\SwarmLevel();
        $zergSwarmLevel
            ->setLevel(21)
            ->setTotalLevelXp(192500)
            ->setCurrentLevelXp(56725);

        $protossSwarmLevel = new Player\SwarmLevel();
        $protossSwarmLevel
            ->setLevel(6)
            ->setTotalLevelXp(135000)
            ->setCurrentLevelXp(60367);

        $swarmLevelSummary = new Player\SwarmLevelSummary();
        $swarmLevelSummary
            ->setOverallLevel(62)
            ->setTerranOverview($terranSwarmLevel)
            ->setProtossOverview($protossSwarmLevel)
            ->setZergOverview($zergSwarmLevel);

        return $swarmLevelSummary;
    }

}
