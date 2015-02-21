<?php


namespace BlizzardGalaxy\ApiSupervisor\Service;

use BlizzardGalaxy\ApiSupervisor\Enum\Region;
use BlizzardGalaxy\ApiSupervisor\Enum\Locale;

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

    /**
     * Check if a locale is logically assigned to a region.
     *
     * @param $region
     * @param $locale
     *
     * @return bool
     */
    public function localeIsAssignedToCorrectRegion($region, $locale)
    {
        $associations = array(
            Region::EUROPE          => array(
                Locale::EN_GB,
                Locale::DE_DE,
                Locale::ES_ES,
                Locale::FR_FR,
                Locale::IT_IT,
                Locale::PL_PL,
                Locale::PT_PT,
                Locale::RU_RU,
            ),
            Region::KOREA           => array(
                Locale::KO_KR,
            ),
            Region::SOUTH_EAST_ASIA => array(
                Locale::EN_US,
            ),
            Region::TAIWAN          => array(
                Locale::ZH_TW,
            ),
            Region::UNITED_STATES   => array(
                Locale::EN_US,
                Locale::PT_BR,
                Locale::ES_MX,
            )
        );

        return in_array($locale, $associations[$region]);
    }
}
