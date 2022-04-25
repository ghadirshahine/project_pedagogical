<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Token;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

final class InvalidTokenStructure extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    public static function missingOrNotEnoughSeparators(): self
=======
    /** @return self */
    public static function missingOrNotEnoughSeparators()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('The JWT string must have two dots');
    }

<<<<<<< HEAD
    public static function arrayExpected(string $part): self
=======
    /**
     * @param string $part
     *
     * @return self
     */
    public static function arrayExpected($part)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self($part . ' must be an array');
    }

<<<<<<< HEAD
    public static function dateIsNotParseable(string $value): self
=======
    /**
     * @param string $value
     *
     * @return self
     */
    public static function dateIsNotParseable($value)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Value is not in the allowed date format: ' . $value);
    }
}
