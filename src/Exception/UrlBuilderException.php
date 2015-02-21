<?php


namespace BlizzardGalaxy\ApiSupervisor\Exception;

/**
 * Class UrlBuilderException
 *
 * @package BlizzardGalaxy\ApiSupervisor\Exception
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class UrlBuilderException extends \Exception
{
    public function __construct($message = 'The URL builder caused an exception.')
    {
        parent::__construct($message);
    }
}
