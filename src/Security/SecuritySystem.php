<?php

namespace MyCar\Security;

use MyCar\Alarms\KeyMismatchAlarm;
use MyCar\Keys\KeyInterface;

class SecuritySystem
{
    public static function verifyKey(string $keySignature, KeyInterface $key)
    {
        if ($key->signature() !== $keySignature) {
            throw new KeyMismatchAlarm;
        }
    }
}