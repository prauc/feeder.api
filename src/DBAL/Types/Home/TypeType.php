<?php


namespace App\DBAL\Types\Home;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class TypeType extends AbstractEnumType
{
    public const TEASER = 'hometeaser';
    public const DIASHOW = 'homedia';
    public const VIDEO = 'homevid';
    public const DEFAULT = 'home';

    protected static $choices = [
        self::TEASER => 'hometeaser',
        self::DIASHOW => 'homedia',
        self::VIDEO => 'homevid',
        self::DEFAULT => 'home',
    ];
}