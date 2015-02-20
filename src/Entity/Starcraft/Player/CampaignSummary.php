<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Contains information regarding the highest difficulty setting
 * at which the campaign was finished.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class CampaignSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var string
     *
     * @JMS\SerializedName("wol")
     * @JMS\Type("string")
     */
    protected $wingsOfLibertyHighestDifficulty;

    /**
     * @var string
     *
     * @JMS\SerializedName("hots")
     * @JMS\Type("string")
     */
    protected $heartOfTheSwarmHighestDifficulty;

    /**
     * @return string
     */
    public function getWingsOfLibertyHighestDifficulty()
    {
        return $this->wingsOfLibertyHighestDifficulty;
    }

    /**
     * @param string $wingsOfLibertyHighestDifficulty
     *
     * @return $this
     */
    public function setWingsOfLibertyHighestDifficulty($wingsOfLibertyHighestDifficulty)
    {
        $this->wingsOfLibertyHighestDifficulty = $wingsOfLibertyHighestDifficulty;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeartOfTheSwarmHighestDifficulty()
    {
        return $this->heartOfTheSwarmHighestDifficulty;
    }

    /**
     * @param string $heartOfTheSwarmHighestDifficulty
     *
     * @return $this
     */
    public function setHeartOfTheSwarmHighestDifficulty($heartOfTheSwarmHighestDifficulty)
    {
        $this->heartOfTheSwarmHighestDifficulty = $heartOfTheSwarmHighestDifficulty;

        return $this;
    }
}
