<?php

namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft;

use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\CareerSummary;
use BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\SwarmLevelSummary;
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
     * @var int
     *
     * @JMS\SerializedName("realm")
     * @JMS\Type("integer")
     */
    protected $realm;

    /**
     * @var string
     *
     * @JMS\SerializedName("displayName")
     * @JMS\Type("string")
     */
    protected $displayName;

    /**
     * @var string
     *
     * @JMS\SerializedName("clanName")
     * @JMS\Type("string")
     */
    protected $clanName;

    /**
     * @var string
     *
     * @JMS\SerializedName("clanTag")
     * @JMS\Type("string")
     */
    protected $clanTag;

    /**
     * @var string
     *
     * @JMS\SerializedName("profilePath")
     * @JMS\Type("string")
     */
    protected $profilePath;

    /**
     * @var Portrait
     *
     * @JMS\SerializedName("portrait")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Portrait")
     */
    protected $portrait;

    /**
     * @var CareerSummary
     *
     * @JMS\SerializedName("career")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\CareerSummary")
     */
    protected $careerSummary;

    /**
     * @var SwarmLevelSummary
     *
     * @JMS\SerializedName("swarmLevels")
     * @JMS\Type("BlizzardGalaxy\ApiSupervisor\Entity\Starcraft\Player\SwarmLevelSummary")
     */
    protected $swarmLevelSummary;

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

    /**
     * @return int
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @param int $realm
     *
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getClanName()
    {
        return $this->clanName;
    }

    /**
     * @param string $clanName
     *
     * @return $this
     */
    public function setClanName($clanName)
    {
        $this->clanName = $clanName;

        return $this;
    }

    /**
     * @return string
     */
    public function getClanTag()
    {
        return $this->clanTag;
    }

    /**
     * @param string $clanTag
     *
     * @return $this
     */
    public function setClanTag($clanTag)
    {
        $this->clanTag = $clanTag;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfilePath()
    {
        return $this->profilePath;
    }

    /**
     * @param string $profilePath
     *
     * @return $this
     */
    public function setProfilePath($profilePath)
    {
        $this->profilePath = $profilePath;

        return $this;
    }

    /**
     * @return Portrait
     */
    public function getPortrait()
    {
        return $this->portrait;
    }

    /**
     * @param Portrait $portrait
     *
     * @return $this
     */
    public function setPortrait($portrait)
    {
        $this->portrait = $portrait;

        return $this;
    }

    /**
     * @return CareerSummary
     */
    public function getCareerSummary()
    {
        return $this->careerSummary;
    }

    /**
     * @param CareerSummary $careerSummary
     *
     * @return $this
     */
    public function setCareerSummary($careerSummary)
    {
        $this->careerSummary = $careerSummary;

        return $this;
    }

    /**
     * @return SwarmLevelSummary
     */
    public function getSwarmLevelSummary()
    {
        return $this->swarmLevelSummary;
    }

    /**
     * @param SwarmLevelSummary $swarmLevelSummary
     *
     * @return $this
     */
    public function setSwarmLevelSummary($swarmLevelSummary)
    {
        $this->swarmLevelSummary = $swarmLevelSummary;

        return $this;
    }
}
