<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Signer;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

final class InvalidKeyProvided extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    public static function cannotBeParsed(string $details): self
=======
    /**
     * @param string $details
     *
     * @return self
     */
    public static function cannotBeParsed($details)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('It was not possible to parse your key, reason: ' . $details);
    }

<<<<<<< HEAD
    public static function incompatibleKey(): self
=======
    /** @return self */
    public static function incompatibleKey()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('This key is not compatible with this signer');
    }
}
