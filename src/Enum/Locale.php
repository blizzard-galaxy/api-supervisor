<?php


namespace BlizzardGalaxy\ApiSupervisor\Enum;

/**
 * Holds a list of the locales available for the API
 * calls.
 *
 * @package BlizzardGalaxy\ApiSupervisor\Enum
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class Locale implements ArrayEnumInterface
{
    const EN_GB = "en_GB";
    const DE_DE = "de_DE";
    const ES_ES = "es_ES";
    const FR_FR = "fr_FR";
    const IT_IT = "it_IT";
    const PL_PL = "pl_PL";
    const PT_PT = "pt_PT";
    const RU_RU = "ru_RU";
    const KO_KR = 'ko_KR';
    const EN_US = 'en_US';
    const ZH_TW = 'zh_TW';
    const PT_BR = 'pt_BR';
    const ES_MX = 'es_MX';

    /**
     * Get all of the entries as an array.
     *
     * @return array
     */
    public static function getAllAsArray()
    {
        return array(
            self::EN_GB,
            self::DE_DE,
            self::ES_ES,
            self::FR_FR,
            self::IT_IT,
            self::PL_PL,
            self::PT_PT,
            self::RU_RU,
            self::KO_KR,
            self::EN_US,
            self::ZH_TW,
            self::PT_BR,
            self::ES_MX,
        );
    }
}
