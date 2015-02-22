<?php


namespace BlizzardGalaxy\ApiSupervisor\Enum;

/**
 * Specifies whether an Enum can return an array
 * of all of its values (useful for validation).
 *
 * @package BlizzardGalaxy\ApiSupervisor\Enum
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
interface ArrayEnumInterface
{
    /**
     * Get all of the entries as an array.
     *
     * @return array
     */
    public static function getAllAsArray();
}
