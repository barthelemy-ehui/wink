<?php
namespace Wink\Lang;


class Lang
{
    const FRENCH = 'fr';
    const ENGLISH = 'en';
    
    public static function getLanguagesAvailable(){
        return [
          self::FRENCH,
          self::ENGLISH,
        ];
    }
}