<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Signer\Ecdsa;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;

final class ConversionFailed extends InvalidArgumentException implements Exception
{
<<<<<<< HEAD
    public static function invalidLength(): self
=======
    /** @return self */
    public static function invalidLength()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Invalid signature length.');
    }

<<<<<<< HEAD
    public static function incorrectStartSequence(): self
=======
    /** @return self */
    public static function incorrectStartSequence()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Invalid data. Should start with a sequence.');
    }

<<<<<<< HEAD
    public static function integerExpected(): self
=======
    /** @return self */
    public static function integerExpected()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Invalid data. Should contain an integer.');
    }
}
