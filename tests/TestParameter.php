<?php


namespace BlizzardGalaxy\ApiSupervisor\Test;

/**
 * Contains parameters that are useful for testing.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Test
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class TestParameter
{
    public static function getConfigFilePath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config';
    }
}
