<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;

use BlizzardGalaxy\ApiSupervisor\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Holds information regarding the career summary of a player, including
 * race, number of wins and total number of games.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class CareerSummary implements ApiSupervisorEntityInterface
{
    /**
     * @var string
     *
     * @JMS\SerializedName("primaryRace")
     * @JMS\Type("string")
     */
    protected $primaryRace;

    /**
     * @var int
     *
     * @JMS\SerializedName("terranWins")
     * @JMS\Type("integer")
     */
    protected $terranWins;

    /**
     * @var int
     *
     * @JMS\SerializedName("protossWins")
     * @JMS\Type("integer")
     */
    protected $protossWins;

    /**
     * @var int
     *
     * @JMS\SerializedName("zergWins")
     * @JMS\Type("integer")
     */
    protected $zergWins;

    /**
     * @var string
     *
     * @JMS\SerializedName("highest1v1Rank")
     * @JMS\Type("string")
     */
    protected $highest1v1Rank;

    /**
     * @var string
     *
     * @JMS\SerializedName("highestTeamRank")
     * @JMS\Type("string")
     */
    protected $highestTeamRank;

    /**
     * @var int
     *
     * @JMS\SerializedName("seasonTotalGames")
     * @JMS\Type("integer")
     */
    protected $seasonTotalGames;

    /**
     * @var int
     *
     * @JMS\SerializedName("careerTotalGames")
     * @JMS\Type("integer")
     */
    protected $careerTotalGames;

    /**
     * @return string
     */
    public function getPrimaryRace()
    {
        return $this->primaryRace;
    }

    /**
     * @param string $primaryRace
     *
     * @return $this
     */
    public function setPrimaryRace($primaryRace)
    {
        $this->primaryRace = $primaryRace;

        return $this;
    }

    /**
     * @return int
     */
    public function getTerranWins()
    {
        return $this->terranWins;
    }

    /**
     * @param int $terranWins
     *
     * @return $this
     */
    public function setTerranWins($terranWins)
    {
        $this->terranWins = $terranWins;

        return $this;
    }

    /**
     * @return int
     */
    public function getProtossWins()
    {
        return $this->protossWins;
    }

    /**
     * @param int $protossWins
     *
     * @return $this
     */
    public function setProtossWins($protossWins)
    {
        $this->protossWins = $protossWins;

        return $this;
    }

    /**
     * @return int
     */
    public function getZergWins()
    {
        return $this->zergWins;
    }

    /**
     * @param int $zergWins
     *
     * @return $this
     */
    public function setZergWins($zergWins)
    {
        $this->zergWins = $zergWins;

        return $this;
    }

    /**
     * @return string
     */
    public function getHighest1v1Rank()
    {
        return $this->highest1v1Rank;
    }

    /**
     * @param string $highest1v1Rank
     *
     * @return $this
     */
    public function setHighest1v1Rank($highest1v1Rank)
    {
        $this->highest1v1Rank = $highest1v1Rank;

        return $this;
    }

    /**
     * @return string
     */
    public function getHighestTeamRank()
    {
        return $this->highestTeamRank;
    }

    /**
     * @param string $highestTeamRank
     *
     * @return $this
     */
    public function setHighestTeamRank($highestTeamRank)
    {
        $this->highestTeamRank = $highestTeamRank;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeasonTotalGames()
    {
        return $this->seasonTotalGames;
    }

    /**
     * @param int $seasonTotalGames
     *
     * @return $this
     */
    public function setSeasonTotalGames($seasonTotalGames)
    {
        $this->seasonTotalGames = $seasonTotalGames;

        return $this;
    }

    /**
     * @return int
     */
    public function getCareerTotalGames()
    {
        return $this->careerTotalGames;
    }

    /**
     * @param int $careerTotalGames
     *
     * @return $this
     */
    public function setCareerTotalGames($careerTotalGames)
    {
        $this->careerTotalGames = $careerTotalGames;

        return $this;
    }
}
