<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class PointSummary
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class PointSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("totalPoints")
     * @JMS\Type("integer")
     */
    protected $totalPoints;

    /**
     * @var CategorySummary
     *
     * @JMS\SerializedName("categoryPoints")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement\CategorySummary")
     */
    protected $categorySummary;

    /**
     * @return int
     */
    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    /**
     * @param int $totalPoints
     *
     * @return $this
     */
    public function setTotalPoints($totalPoints)
    {
        $this->totalPoints = $totalPoints;

        return $this;
    }

    /**
     * @return CategorySummary
     */
    public function getCategorySummary()
    {
        return $this->categorySummary;
    }

    /**
     * @param CategorySummary $categorySummary
     *
     * @return $this
     */
    public function setCategorySummary($categorySummary)
    {
        $this->categorySummary = $categorySummary;

        return $this;
    }


}
