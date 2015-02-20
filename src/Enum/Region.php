<?php


namespace BlizzardGalaxy\ApiSupervisor\Enum;

/**
 * Holds a list of all the regions the API can
 * retrieve information from.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Enum
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class Region
{
    const EUROPE = 'eu';
    const KOREA = 'kr';
    const SOUTH_EAST_ASIA = 'sea';
    const TAIWAN = 'tw';
    const UNITED_STATES = 'usa';

    /**
     * Retrieve all of the regions as an array.
     *
     * @return array
     */
    public static function getAllRegionsAsArray() {
        return array (
            self::EUROPE,
            self::KOREA,
            self::SOUTH_EAST_ASIA,
            self::TAIWAN,
            self::UNITED_STATES
        );
    }
}