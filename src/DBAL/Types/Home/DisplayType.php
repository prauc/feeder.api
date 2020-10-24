<?php


namespace App\DBAL\Types\Home;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class DisplayType extends AbstractEnumType
{
    public const ARTICLE = 'article';
    public const VIDEO = 'video';
    public const DIASHOW = 'diashow';
    public const LIVE_LEAGUE = 'live.league';
    public const LIVE_MATCH = 'live.match';
    public const LIVESTREAM = 'livestream';

    protected static $choices = [
        self::ARTICLE => 'article',
        self::VIDEO => 'video',
        self::DIASHOW => 'diashow',
        self::LIVE_LEAGUE => 'live.league',
        self::LIVE_MATCH => 'live.match',
        self::LIVESTREAM => 'livestream'
    ];
}