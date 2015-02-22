<?php


namespace BlizzardGalaxy\ApiSupervisor\Service;

use BlizzardGalaxy\ApiSupervisor\Enum\Region;
use BlizzardGalaxy\ApiSupervisor\Enum\Locale;

/**
 * Validates if the region and locale rules have been correctly specified.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Service
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class RegionLocalValidator
{
    /**
     * @param string $value
     * @param array  $array
     *
     * @return bool
     */
    public function enumValueIsInArray($value = '', $array = [])
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
        $associations = [
            Region::EUROPE          => [
                Locale::EN_GB,
                Locale::DE_DE,
                Locale::ES_ES,
                Locale::FR_FR,
                Locale::IT_IT,
                Locale::PL_PL,
                Locale::PT_PT,
                Locale::RU_RU,
            ],
            Region::KOREA           => [
                Locale::KO_KR,
            ],
            Region::SOUTH_EAST_ASIA => [
                Locale::EN_US,
            ],
            Region::TAIWAN          => [
                Locale::ZH_TW,
            ],
            Region::UNITED_STATES   => [
                Locale::EN_US,
                Locale::PT_BR,
                Locale::ES_MX,
            ]
        ];

        return in_array($locale, $associations[$region]);
    }
}
