<?php


namespace BlizzardGalaxy\ApiSupervisor\Exception;

/**
 * Handles exceptions for the URL Builder.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Exception
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class URLBuilderException extends ApiSupervisorException
{
    public function __construct($message = 'The URL builder caused an exception.')
    {
        parent::__construct($message);
    }
}
