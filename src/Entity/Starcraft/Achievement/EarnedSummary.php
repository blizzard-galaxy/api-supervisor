<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Holds information on when an achievement was earned by the player.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class EarnedSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("achievementId")
     * @JMS\Type("integer")
     */
    protected $achievementId;

    /**
     * @var int
     *
     * @JMS\SerializedName("completionDate")
     * @JMS\Type("integer")
     */
    protected $completionDate;

    /**
     * @return int
     */
    public function getAchievementId()
    {
        return $this->achievementId;
    }

    /**
     * @param int $achievementId
     *
     * @return $this
     */
    public function setAchievementId($achievementId)
    {
        $this->achievementId = $achievementId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCompletionDate()
    {
        return $this->completionDate;
    }

    /**
     * @param int $completionDate
     *
     * @return $this
     */
    public function setCompletionDate($completionDate)
    {
        $this->completionDate = $completionDate;

        return $this;
    }


}
