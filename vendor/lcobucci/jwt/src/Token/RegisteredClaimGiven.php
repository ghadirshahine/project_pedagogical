<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Token;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

use function sprintf;

final class RegisteredClaimGiven extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    private const DEFAULT_MESSAGE = 'Builder#withClaim() is meant to be used for non-registered claims, '
                                  . 'check the documentation on how to set claim "%s"';

    public static function forClaim(string $name): self
=======
    const DEFAULT_MESSAGE = 'Builder#withClaim() is meant to be used for non-registered claims, '
                                  . 'check the documentation on how to set claim "%s"';

    /**
     * @param string $name
     *
     * @return self
     */
    public static function forClaim($name)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self(sprintf(self::DEFAULT_MESSAGE, $name));
    }
}
