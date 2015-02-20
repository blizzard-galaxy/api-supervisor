<?php


namespace BlizzardGalaxy\ApiSupervisor\Entity\Starcraft;

use BlizzardGalaxy\ApiSupervisor\Test\Entity\ApiSupervisorEntityInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Holds information regarding the portrait that a player currently has active.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Entity\Starcraft
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class Portrait implements ApiSupervisorEntityInterface
{
    /**
     * @var int
     *
     * @JMS\SerializedName("x")
     * @JMS\Type("integer")
     */
    protected $xCoordinate;

    /**
     * @var int
     *
     * @JMS\SerializedName("y")
     * @JMS\Type("integer")
     */
    protected $yCoordinate;

    /**
     * @var int
     *
     * @JMS\SerializedName("w")
     * @JMS\Type("integer")
     */
    protected $width;

    /**
     * @var int
     *
     * @JMS\SerializedName("h")
     * @JMS\Type("integer")
     */
    protected $height;

    /**
     * @var int
     *
     * @JMS\SerializedName("offset")
     * @JMS\Type("integer")
     */
    protected $offset;

    /**
     * @var string
     *
     * @JMS\SerializedName("url")
     * @JMS\Type("string")
     */
    protected $url;

    /**
     * @return int
     */
    public function getXCoordinate()
    {
        return $this->xCoordinate;
    }

    /**
     * @param int $xCoordinate
     *
     * @return $this
     */
    public function setXCoordinate($xCoordinate)
    {
        $this->xCoordinate = $xCoordinate;

        return $this;
    }

    /**
     * @return int
     */
    public function getYCoordinate()
    {
        return $this->yCoordinate;
    }

    /**
     * @param int $yCoordinate
     *
     * @return $this
     */
    public function setYCoordinate($yCoordinate)
    {
        $this->yCoordinate = $yCoordinate;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
