<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Information regarding the swarm level of a player for a single race.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class SwarmLevel implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("level")
     * @JMS\Type("integer")
     */
    protected $level;

    /**
     * @var int
     *
     * @JMS\SerializedName("totalLevelXP")
     * @JMS\Type("integer")
     */
    protected $totalLevelXp;

    /**
     * @var int
     *
     * @JMS\SerializedName("currentLevelXP")
     * @JMS\Type("integer")
     */
    protected $currentLevelXp;

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLevelXp()
    {
        return $this->totalLevelXp;
    }

    /**
     * @param int $totalLevelXp
     *
     * @return $this
     */
    public function setTotalLevelXp($totalLevelXp)
    {
        $this->totalLevelXp = $totalLevelXp;

        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentLevelXp()
    {
        return $this->currentLevelXp;
    }

    /**
     * @param int $currentLevelXp
     *
     * @return $this
     */
    public function setCurrentLevelXp($currentLevelXp)
    {
        $this->currentLevelXp = $currentLevelXp;

        return $this;
    }


}