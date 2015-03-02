<?php


namespace BlizzardGalaxy\ApiSupervisor\Tests\Entity\Starcraft\Ladder;


use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder\LadderMember;
use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder\LadderSummary;
use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;
use BlizzardGalaxy\ApiSupervisor\Test\Entity\AbstractSerializationTest;
use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;

/**
 * Class LadderSummaryTest
 *
 * @package BlizzardGalaxy\ApiSupervisor\Tests\Entity\Starcraft\Ladder
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class LadderSummaryTest extends AbstractSerializationTest
{
    /**
     * Return a JSON representation of an API response.
     *
     * @return string
     */
    protected function getMockFile()
    {
        return 'starcraft' . DIRECTORY_SEPARATOR . 'ladder-summary.json';
    }

    /**
     * Return the object instance that is being tested.
     *
     * @return ApiSupervisorEntityInterface
     */
    protected function getExpectedObject()
    {
        $ladderMembers = [];

        $ladderMember = $this->createPlayerOne();
        $ladderMembers[] = $ladderMember;

        $ladderMember = $this->createPlayerTwo();
        $ladderMembers[] = $ladderMember;

        $ladderSummary = new LadderSummary();
        $ladderSummary->setLadderMembers($ladderMembers);

        return $ladderSummary;
    }

    /**
     * Return the class path of the object being tested.
     *
     * @return string
     */
    protected function getObjectClassPath()
    {
        return 'BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder\LadderSummary';
    }

    /**
     * @return LadderMember
     */
    protected function createPlayerOne()
    {
        $ladderCharacter = new Player();
        $ladderCharacter
            ->setId(202269)
            ->setRealm(1)
            ->setDisplayName('BreZelPete')
            ->setClanName('eL Diablos Brigade')
            ->setClanTag('eLDB')
            ->setProfilePath('/profile/202269/1/BreZelPete/');

        $ladderMember = new LadderMember();
        $ladderMember
            ->setCharacter($ladderCharacter)
            ->setJoinTimestamp(1282154437)
            ->setPoints(1747.0)
            ->setWins(142)
            ->setLosses(179)
            ->setHighestRank(2)
            ->setPreviousRank(1)
            ->setFavouriteRaceP1("PROTOSS")
            ->setFavouriteRaceP2("ZERG");

        return $ladderMember;
    }

    /**
     * @return LadderMember
     */
    protected function createPlayerTwo()
    {
        $ladderCharacter = new Player();
        $ladderCharacter
            ->setId(361299)
            ->setRealm(1)
            ->setDisplayName('LzwoF')
            ->setClanName('eL Diablos Brigade')
            ->setClanTag('eLDB')
            ->setProfilePath('/profile/361299/1/LzwoF/');

        $ladderMember = new LadderMember();
        $ladderMember
            ->setCharacter($ladderCharacter)
            ->setJoinTimestamp(1282154437)
            ->setPoints(1747.0)
            ->setWins(142)
            ->setLosses(179)
            ->setHighestRank(2)
            ->setPreviousRank(1)
            ->setFavouriteRaceP1("PROTOSS")
            ->setFavouriteRaceP2("ZERG");

        return $ladderMember;
    }

}
