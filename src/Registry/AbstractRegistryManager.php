<?php


namespace BlizzardGalaxy\ApiSupervisor\Registry;

/**
 * Describes a manager for manipulating the configuration
 * parameters of the package.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Registry
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
abstract class AbstractRegistryManager
{
    /**
     * Retrieve the API key used to make calls
     * to Battle.NET endpoints.
     *
     * @return string
     */
    abstract public function getApiKey();
}
