<?php


namespace BlizzardGalaxy\ApiSupervisor\Exception;

/**
 * Handles exceptions regarding invalid region settings.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Exception
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class RegionException extends ApiSupervisorException
{
    public function __construct($message = "The region that you have specified is not defined.")
    {
        parent::__construct($message);
    }
}
