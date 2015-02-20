<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Holds information regarding the multiple swarm levels of the player.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class SwarmLevelSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("level")
     * @JMS\Type("integer")
     */
    protected $overallLevel;

    /**
     * @var SwarmLevel
     *
     * @JMS\SerializedName("terran")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\SwarmLevel")
     */
    protected $terranOverview;

    /**
     * @var SwarmLevel
     *
     * @JMS\SerializedName("zerg")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\SwarmLevel")
     */
    protected $zergOverview;

    /**
     * @var SwarmLevel
     *
     * @JMS\SerializedName("protoss")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\SwarmLevel")
     */
    protected $protossOverview;

    /**
     * @return int
     */
    public function getOverallLevel()
    {
        return $this->overallLevel;
    }

    /**
     * @param int $overallLevel
     *
     * @return $this
     */
    public function setOverallLevel($overallLevel)
    {
        $this->overallLevel = $overallLevel;

        return $this;
    }

    /**
     * @return SwarmLevel
     */
    public function getTerranOverview()
    {
        return $this->terranOverview;
    }

    /**
     * @param SwarmLevel $terranOverview
     *
     * @return $this
     */
    public function setTerranOverview($terranOverview)
    {
        $this->terranOverview = $terranOverview;

        return $this;
    }

    /**
     * @return SwarmLevel
     */
    public function getZergOverview()
    {
        return $this->zergOverview;
    }

    /**
     * @param SwarmLevel $zergOverview
     *
     * @return $this
     */
    public function setZergOverview($zergOverview)
    {
        $this->zergOverview = $zergOverview;

        return $this;
    }

    /**
     * @return SwarmLevel
     */
    public function getProtossOverview()
    {
        return $this->protossOverview;
    }

    /**
     * @param SwarmLevel $protossOverview
     *
     * @return $this
     */
    public function setProtossOverview($protossOverview)
    {
        $this->protossOverview = $protossOverview;

        return $this;
    }


}