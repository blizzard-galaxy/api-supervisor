<?php


namespace BlizzardGalaxy\ApiSupervisor\Exception;

/**
 * Class RegionException
 *
 * @package BlizzardGalaxy\ApiSupervisor\Exception
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class RegionException extends \Exception
{
    public function __construct($message = "The region that you have specified is not defined.")
    {
        parent::__construct($message);
    }
}
