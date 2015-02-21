<?php


namespace BlizzardGalaxy\ApiSupervisor\Enum\Method;

use BlizzardGalaxy\ApiSupervisor\Enum\ArrayEnumInterface;

/**
 * Keeps a list of all the starcraft methods that can be called.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Enum\Method
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class StarcraftApiMethod implements ArrayEnumInterface
{
    const PLAYER_PROFILE = 'profile';

    /**
     * Get all of the entries as an array.
     *
     * @return array
     */
    public static function getAllAsArray()
    {
        return array(
            self::PLAYER_PROFILE,
        );
    }
}
