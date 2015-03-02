<?php

namespace BlizzardGalaxy\ApiSupervisor\Test\Entity\Starcraft;

use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement;
use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\AchievementSummary;
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
        return 'starcraft' . DIRECTORY_SEPARATOR . 'player.json';
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
        $campaignSummary = $this->getExpectedCampaignSummary();
        $seasonSummary = $this->getExpectedSeasonSummary();
        $rewards = $this->getExpectedRewards();
        $achievementSummary = $this->getExpectedAchievementSummary();

        $player = new Player();
        $player
            ->setId(2048419)
            ->setRealm(1)
            ->setDisplayName('LionHeart')
            ->setClanName('Cegeka Guild')
            ->setClanTag('CGK')
            ->setProfilePath('/profile/2048419/1/LionHeart/')
            ->setPortrait($portrait)
            ->setCareerSummary($careerSummary)
            ->setSwarmLevelSummary($swarmLevelSummary)
            ->setCampaignSummary($campaignSummary)
            ->setSeasonSummary($seasonSummary)
            ->setRewards($rewards)
            ->setAchievementSummary($achievementSummary);

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

    /**
     * @return Player\CampaignSummary
     */
    private function getExpectedCampaignSummary()
    {
        $campaignSummary = new Player\CampaignSummary();
        $campaignSummary
            ->setWingsOfLibertyHighestDifficulty("CASUAL")
            ->setHeartOfTheSwarmHighestDifficulty("HARD");

        return $campaignSummary;
    }

    /**
     * @return Player\SeasonSummary
     */
    private function getExpectedSeasonSummary()
    {
        $seasonSummary = new Player\SeasonSummary();
        $seasonSummary
            ->setSeasonId(21)
            ->setSeasonNumber(1)
            ->setSeasonYear(2015)
            ->setTotalGamesPlayedThisSeason(0);

        return $seasonSummary;
    }

    /**
     * @return Player\Rewards
     */
    private function getExpectedRewards()
    {
        $rewards = new Player\Rewards();
        $rewards
            ->setSelected([328039243, 332775232, 616156284, 716760434, 1202205842, 2665125299, 3152244759, 3837142423])
            ->setEarned([97993138, 144654643, 158756500, 171155159, 199895074, 234481452, 328039243, 332775232, 367294557, 382993515, 414497095, 493147594, 531423509, 537489092, 547085114, 566530218, 615147322, 616156284, 637508413, 693439517, 716760434, 722125123, 744177281, 836744187, 868991824, 928246938, 939528911, 964469219, 1034610896, 1060652497, 1091886782, 1101809667, 1121169820, 1127061123, 1127476957, 1159285604, 1177038943, 1179925015, 1197027376, 1202205842, 1274985866, 1296775413, 1307174747, 1372312663, 1399145799, 1400603187, 1443233935, 1467565626, 1516476230, 1542695810, 1548839636, 1605367309, 1674622116, 1686196380, 1702690519, 1716314872, 1728751618, 1750262021, 1756072743, 1807193192, 1919498533, 2021649483, 2119427912, 2184379176, 2197064007, 2212045446, 2218053552, 2229123380, 2270057859, 2276535543, 2288979736, 2290710696, 2486919067, 2562570007, 2594676792, 2636717639, 2665125299, 2674248337, 2718858952, 2753058248, 2785782091, 2799540787, 2825428175, 2834383599, 2951203821, 3045219362, 3133342286, 3152244759, 3180747283, 3281768270, 3313345670, 3319454886, 3404898509, 3412616780, 3429860709, 3438736930, 3484380374, 3492698187, 3587970117, 3625001715, 3630735430, 3638208774, 3759131515, 3798567608, 3813146549, 3821720584, 3834465703, 3837142423, 3851674204, 3977161309, 3977184535, 4000903407, 4017064141, 4051538931, 4067140795, 4125422938, 4130543639, 4166778254, 4169431124, 4179780094, 4179975174, 4189275055, 4196367769, 4229064357, 4261253982, 4265338800]);

        return $rewards;
    }

    /**
     * @return AchievementSummary
     */
    private function getExpectedAchievementSummary()
    {
        $categorySummary = new Achievement\CategorySummary();
        $categorySummary
            ->setArcade(100)
            ->setLibertyCampaign(1230)
            ->setSwarmCampaign(1160)
            ->setMatchmaking(920)
            ->setExploration(490)
            ->setCustomGames(310);

        $pointSummary = new Achievement\PointSummary();
        $pointSummary
            ->setTotalPoints(4210)
            ->setCategorySummary($categorySummary);

        $earnedAchievementOne = new Achievement\EarnedSummary();
        $earnedAchievementOne
            ->setAchievementId(91475035554379)
            ->setCompletionDate(1410730946);

        $earnedAchievementTwo = new Achievement\EarnedSummary();
        $earnedAchievementTwo
            ->setAchievementId(91475035554135)
            ->setCompletionDate(1410730581);

        $earnedAchievements = [$earnedAchievementOne, $earnedAchievementTwo];

        $achievementSummary = new AchievementSummary();
        $achievementSummary
            ->setPointSummary($pointSummary)
            ->setEarnedAchievements($earnedAchievements);

        return $achievementSummary;
    }

}
