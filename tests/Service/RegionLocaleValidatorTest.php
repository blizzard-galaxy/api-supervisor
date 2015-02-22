<?php


namespace BlizzardGalaxy\ApiSupervisor\Test\Service;


use BlizzardGalaxy\ApiSupervisor\Enum\Locale;
use BlizzardGalaxy\ApiSupervisor\Enum\Region;
use BlizzardGalaxy\ApiSupervisor\Service\RegionLocaleValidator;

class RegionLocaleValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RegionLocaleValidator
     */
    protected $regionLocaleValidator;

    public function setUp()
    {
        parent::setUp();

        $this->regionLocaleValidator = new RegionLocaleValidator();
    }

    public function testEnumValueIsInArray()
    {
        $europeIsAValidRegion = $this->getRegionLocaleValidator()->enumValueIsInArray(Region::EUROPE, Region::getAllAsArray());
        $this->assertTrue($europeIsAValidRegion);

        $brazilIsNotAValidRegion = $this->getRegionLocaleValidator()->enumValueIsInArray('br', Region::getAllAsArray());
        $this->assertFalse($brazilIsNotAValidRegion);
    }

    public function testLocaleIsAssignedToCorrectRegion()
    {
        $correctAssociation = $this->getRegionLocaleValidator()->localeIsAssignedToCorrectRegion(Region::EUROPE, Locale::EN_GB);
        $this->assertTrue($correctAssociation);

        $incorrectAssociation = $this->getRegionLocaleValidator()->localeIsAssignedToCorrectRegion(Region::TAIWAN, Locale::KO_KR);
        $this->assertFalse($incorrectAssociation);
    }

    /**
     * @return RegionLocaleValidator
     */
    public function getRegionLocaleValidator()
    {
        return $this->regionLocaleValidator;
    }


}
