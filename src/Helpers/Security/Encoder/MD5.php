<?php

namespace Mantis\Helpers\Security\Encoder;

use Mantis\Helpers\Security\Encoder;

class MD5 extends Encoder
{

    static function encode($data, $algo = 0)
    {
        return md5($data);
    }

    // This can not be decoded
    static function decode($data, $algo = 0)
    {
        return null;
    }
}
