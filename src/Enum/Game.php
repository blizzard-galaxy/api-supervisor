<?php


namespace BlizzardGalaxy\ApiSupervisor\Enum;

/**
 * Contains a list of the games that are supported
 * by the API parser.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Enum
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class Game implements ArrayEnumInterface
{
    const STARCRAFT = 'sc2';
    const WORLD_OF_WARCRAFT = 'wow';

    /**
     * Get all of the entries as an array.
     *
     * @return array
     */
    public static function getAllAsArray()
    {
        return [
            self::STARCRAFT,
            self::WORLD_OF_WARCRAFT,
        ];
    }
}
