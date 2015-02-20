<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Contains information on the rewards that the user has chosen
 * and those that have been earned.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class Rewards implements ApiSupervisorEntityInterface
{
    /**
     * @var array
     *
     * @JMS\SerializedName("selected")
     * @JMS\Type("array<integer>")
     */
    protected $selected = array();

    /**
     * @var array
     *
     * @JMS\SerializedName("earned")
     * @JMS\Type("array<integer>")
     */
    protected $earned = array();

    /**
     * @return array
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param array $selected
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * @return array
     */
    public function getEarned()
    {
        return $this->earned;
    }

    /**
     * @param array $earned
     *
     * @return $this
     */
    public function setEarned($earned)
    {
        $this->earned = $earned;

        return $this;
    }


}
