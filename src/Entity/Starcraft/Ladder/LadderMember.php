<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder;


use BlizzardGalaxy\ApiSupervisor\Entity\ApiSupervisorEntityInterface;
use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player;
use JMS\Serializer\Annotation as JMS;

/**
 * Holds information regarding a ladder member - used for the profile
 * in league summary.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Ladder
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class LadderMember implements ApiSupervisorEntityInterface
{
    /**
     * @var Player
     *
     * @JMS\SerializedName("character")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player")
     */
    protected $character;

    /**
     * @var int
     *
     * @JMS\SerializedName("joinTimestamp")
     * @JMS\Type("string")
     */
    protected $joinTimestamp;

    /**
     * @var int
     *
     * @JMS\SerializedName("points")
     * @JMS\Type("integer")
     */
    protected $points;

    /**
     * @var int
     *
     * @JMS\SerializedName("wins")
     * @JMS\Type("integer")
     */
    protected $wins;

    /**
     * @var int
     *
     * @JMS\SerializedName("losses")
     * @JMS\Type("integer")
     */
    protected $losses;

    /**
     * @var int
     *
     * @JMS\SerializedName("highestRank")
     * @JMS\Type("integer")
     */
    protected $highestRank;

    /**
     * @var int
     *
     * @JMS\SerializedName("previousRank")
     * @JMS\Type("integer")
     */
    protected $previousRank;

    /**
     * @var string
     *
     * @JMS\SerializedName("favoriteRaceP1")
     * @JMS\Type("string")
     */
    protected $favouriteRaceP1;

    /**
     * @var string
     *
     * @JMS\SerializedName("favoriteRaceP2")
     * @JMS\Type("string")
     */
    protected $favouriteRaceP2;

    /**
     * @return Player
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param Player $character
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * @return int
     */
    public function getJoinTimestamp()
    {
        return $this->joinTimestamp;
    }

    /**
     * @param int $joinTimestamp
     *
     * @return $this
     */
    public function setJoinTimestamp($joinTimestamp)
    {
        $this->joinTimestamp = $joinTimestamp;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param int $wins
     *
     * @return $this
     */
    public function setWins($wins)
    {
        $this->wins = $wins;

        return $this;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @param int $losses
     *
     * @return $this
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;

        return $this;
    }

    /**
     * @return int
     */
    public function getHighestRank()
    {
        return $this->highestRank;
    }

    /**
     * @param int $highestRank
     *
     * @return $this
     */
    public function setHighestRank($highestRank)
    {
        $this->highestRank = $highestRank;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreviousRank()
    {
        return $this->previousRank;
    }

    /**
     * @param int $previousRank
     *
     * @return $this
     */
    public function setPreviousRank($previousRank)
    {
        $this->previousRank = $previousRank;

        return $this;
    }

    /**
     * @return string
     */
    public function getFavouriteRaceP1()
    {
        return $this->favouriteRaceP1;
    }

    /**
     * @param string $favouriteRaceP1
     *
     * @return $this
     */
    public function setFavouriteRaceP1($favouriteRaceP1)
    {
        $this->favouriteRaceP1 = $favouriteRaceP1;

        return $this;
    }

    /**
     * @return string
     */
    public function getFavouriteRaceP2()
    {
        return $this->favouriteRaceP2;
    }

    /**
     * @param string $favouriteRaceP2
     *
     * @return $this
     */
    public function setFavouriteRaceP2($favouriteRaceP2)
    {
        $this->favouriteRaceP2 = $favouriteRaceP2;

        return $this;
    }


}
