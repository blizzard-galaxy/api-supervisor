<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder;

use BlizzardGalaxy\ApiSupervisor\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Displays a summary of the players in a ladder.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class LadderSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var LadderMember[]
     *
     * @JMS\SerializedName("ladderMembers")
     * @JMS\Type("array<BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder\LadderMember>")
     */
    protected $ladderMembers;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return LadderMember[]
     */
    public function getLadderMembers()
    {
        return $this->ladderMembers;
    }

    /**
     * @param LadderMember[] $ladderMembers
     *
     * @return $this
     */
    public function setLadderMembers($ladderMembers)
    {
        $this->ladderMembers = $ladderMembers;

        return $this;
    }
}
