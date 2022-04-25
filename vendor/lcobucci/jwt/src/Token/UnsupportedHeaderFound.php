<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Token;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

final class UnsupportedHeaderFound extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    public static function encryption(): self
=======
    /** @return self */
    public static function encryption()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Encryption is not supported yet');
    }
}
