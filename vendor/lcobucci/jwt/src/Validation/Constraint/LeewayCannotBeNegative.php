<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

final class LeewayCannotBeNegative extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    public static function create(): self
=======
    /** @return self */
    public static function create()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Leeway cannot be negative');
    }
}
