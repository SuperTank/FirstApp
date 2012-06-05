<?php
namespace Kalendarie\EditorBundle\Type;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class CustomTime extends Type {
    const CUSTOMDATE = 'customtime';
    
    public function getSqlDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        // return the SQL used to create your column type. To create a portable column type, use the $platform.
        return $fieldDeclaration;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        // This is executed when the value is read from the database. Make your conversions here, optionally using the $platform.
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {        
        // This is executed when the value is written to the database. Make your conversions here, optionally using the $platform.
        return $value->format('H:i:s');
    }

    public function getName()
    {
        return self::MYTYPE; // modify to match your constant name
    }
}
