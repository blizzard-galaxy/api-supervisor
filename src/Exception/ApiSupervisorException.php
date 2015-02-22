<?php


namespace BlizzardGalaxy\ApiSupervisor\Exception;

/**
 * Base exception class for the API Supervisor package, to be extended
 * by any other custom exceptions.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Exception
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class ApiSupervisorException extends \Exception
{
    public function __construct($message = 'The API supervisor has triggered an exception.')
    {

    }
}
