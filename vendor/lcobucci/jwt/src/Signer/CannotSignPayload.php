<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Signer;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

final class CannotSignPayload extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    public static function errorHappened(string $error): self
=======
    /**
     * @pararm string $error
     *
     * @return self
     */
    public static function errorHappened($error)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('There was an error while creating the signature: ' . $error);
    }
}
