<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Contains the points scored in the six available categories.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Achievement
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class CategorySummary implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("4325379")
     * @JMS\Type("integer")
     */
    protected $libertyCampaign;

    /**
     * @var int
     *
     * @JMS\SerializedName("4325410")
     * @JMS\Type("integer")
     */
    protected $swarmCampaign;

    /**
     * @var int
     *
     * @JMS\SerializedName("4325377")
     * @JMS\Type("integer")
     */
    protected $matchmaking;

    /**
     * @var int
     *
     * @JMS\SerializedName("4325382")
     * @JMS\Type("integer")
     */
    protected $customGames;

    /**
     * @var int
     *
     * @JMS\SerializedName("4325408")
     * @JMS\Type("integer")
     */
    protected $arcade;

    /**
     * @var int
     *
     * @JMS\SerializedName("4325380")
     * @JMS\Type("integer")
     */
    protected $exploration;

    /**
     * @return int
     */
    public function getLibertyCampaign()
    {
        return $this->libertyCampaign;
    }

    /**
     * @param int $libertyCampaign
     *
     * @return $this
     */
    public function setLibertyCampaign($libertyCampaign)
    {
        $this->libertyCampaign = $libertyCampaign;

        return $this;
    }

    /**
     * @return int
     */
    public function getSwarmCampaign()
    {
        return $this->swarmCampaign;
    }

    /**
     * @param int $swarmCampaign
     *
     * @return $this
     */
    public function setSwarmCampaign($swarmCampaign)
    {
        $this->swarmCampaign = $swarmCampaign;

        return $this;
    }

    /**
     * @return int
     */
    public function getMatchmaking()
    {
        return $this->matchmaking;
    }

    /**
     * @param int $matchmaking
     *
     * @return $this
     */
    public function setMatchmaking($matchmaking)
    {
        $this->matchmaking = $matchmaking;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomGames()
    {
        return $this->customGames;
    }

    /**
     * @param int $customGames
     *
     * @return $this
     */
    public function setCustomGames($customGames)
    {
        $this->customGames = $customGames;

        return $this;
    }

    /**
     * @return int
     */
    public function getArcade()
    {
        return $this->arcade;
    }

    /**
     * @param int $arcade
     *
     * @return $this
     */
    public function setArcade($arcade)
    {
        $this->arcade = $arcade;

        return $this;
    }

    /**
     * @return int
     */
    public function getExploration()
    {
        return $this->exploration;
    }

    /**
     * @param int $exploration
     *
     * @return $this
     */
    public function setExploration($exploration)
    {
        $this->exploration = $exploration;

        return $this;
    }


}
