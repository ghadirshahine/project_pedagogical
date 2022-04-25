<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Encoding;

use JsonException;
use Lcobucci\JWT\Exception;
use RuntimeException;

final class CannotDecodeContent extends RuntimeException implements Exception
{
<<<<<<< HEAD
    public static function jsonIssues(JsonException $previous): self
=======
    /**
     * @param JsonException $previous
     *
     * @return self
     */
    public static function jsonIssues(JsonException $previous)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Error while decoding from JSON', 0, $previous);
    }

<<<<<<< HEAD
    public static function invalidBase64String(): self
=======
    /** @return self */
    public static function invalidBase64String()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self('Error while decoding from Base64Url, invalid base64 characters detected');
    }
}
