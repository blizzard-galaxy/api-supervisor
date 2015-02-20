<?php

namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Representation of a Starcraft player account.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class Player implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("id")
     * @JMS\Type("integer")
     */
    protected $blizzardId;

    /**
     * @return int
     */
    public function getBlizzardId()
    {
        return $this->blizzardId;
    }

    /**
     * @param int $blizzardId
     *
     * @return $this
     */
    public function setBlizzardId($blizzardId)
    {
        $this->blizzardId = $blizzardId;

        return $this;
    }


}