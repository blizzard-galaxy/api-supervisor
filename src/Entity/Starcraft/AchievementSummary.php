<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft;

use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement\PointSummary;
use BlizzardGalaxy\ApiSupervisor\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class AchievementSummary
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class AchievementSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var PointSummary
     *
     * @JMS\SerializedName("points")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement\PointSummary")
     */
    protected $pointSummary;

    /**
     * @var array
     *
     * @JMS\SerializedName("achievements")
     * @JMS\Type("array<BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement\EarnedSummary>")
     */
    protected $earnedAchievements;

    /**
     * @return PointSummary
     */
    public function getPointSummary()
    {
        return $this->pointSummary;
    }

    /**
     * @param PointSummary $pointSummary
     *
     * @return $this
     */
    public function setPointSummary($pointSummary)
    {
        $this->pointSummary = $pointSummary;

        return $this;
    }

    /**
     * @return array
     */
    public function getEarnedAchievements()
    {
        return $this->earnedAchievements;
    }

    /**
     * @param array $earnedAchievements
     *
     * @return $this
     */
    public function setEarnedAchievements($earnedAchievements)
    {
        $this->earnedAchievements = $earnedAchievements;

        return $this;
    }


}
