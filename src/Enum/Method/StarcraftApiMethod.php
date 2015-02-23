<?php


namespace BlizzardGalaxy\ApiSupervisor\Enum\Method;

/**
 * Keeps a list of all the starcraft methods that can be called.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Enum\Method
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class StarcraftApiMethod
{
    const PLAYER = 'profile';
    const LADDER = 'ladder';
    const ACHIEVEMENTS = 'data/achievements';
    const REWARDS = 'data/rewards';
}
