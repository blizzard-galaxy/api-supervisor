<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Contains information regarding the season and the total number
 * of games played.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class SeasonSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("seasonId")
     * @JMS\Type("integer")
     */
    protected $seasonId;

    /**
     * @var int
     *
     * @JMS\SerializedName("seasonNumber")
     * @JMS\Type("integer")
     */
    protected $seasonNumber;

    /**
     * @var int
     *
     * @JMS\SerializedName("seasonYear")
     * @JMS\Type("integer")
     */
    protected $seasonYear;

    /**
     * @var int
     *
     * @JMS\SerializedName("totalGamesThisSeason")
     * @JMS\Type("integer")
     */
    protected $totalGamesPlayedThisSeason;

    /**
     * @return int
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }

    /**
     * @param int $seasonId
     *
     * @return $this
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeasonNumber()
    {
        return $this->seasonNumber;
    }

    /**
     * @param int $seasonNumber
     *
     * @return $this
     */
    public function setSeasonNumber($seasonNumber)
    {
        $this->seasonNumber = $seasonNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeasonYear()
    {
        return $this->seasonYear;
    }

    /**
     * @param int $seasonYear
     *
     * @return $this
     */
    public function setSeasonYear($seasonYear)
    {
        $this->seasonYear = $seasonYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalGamesPlayedThisSeason()
    {
        return $this->totalGamesPlayedThisSeason;
    }

    /**
     * @param int $totalGamesPlayedThisSeason
     *
     * @return $this
     */
    public function setTotalGamesPlayedThisSeason($totalGamesPlayedThisSeason)
    {
        $this->totalGamesPlayedThisSeason = $totalGamesPlayedThisSeason;

        return $this;
    }
}
