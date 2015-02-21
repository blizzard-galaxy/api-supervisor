<?php


namespace BlizzardGalaxy\ApiSupervisor\Service;

/**
 * Class EnumValidator
 *
 * @package BlizzardGalaxy\ApiSupervisor\Service
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class EnumValidator
{
    /**
     * @param string $value
     * @param array  $array
     *
     * @return bool
     */
    public function enumValueIsInArray($value = '', $array = array())
    {
        return in_array($value, $array);
    }
}
