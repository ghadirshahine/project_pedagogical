<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT\Signer\Key;

use InvalidArgumentException;
use Lcobucci\JWT\Exception;
use Throwable;

final class FileCouldNotBeRead extends InvalidArgumentException implements Exception
{
    public static function onPath(string $path, ?Throwable $cause = null): self
    {
        return new self(
            'The path "' . $path . '" does not contain a valid key file',
            0,
            $cause
        );
=======

namespace Lcobucci\JWT\Signer\Key;

use Lcobucci\JWT\Exception;
use InvalidArgumentException;

if (PHP_MAJOR_VERSION === 7) {
    final class FileCouldNotBeRead extends InvalidArgumentException implements Exception
    {
        /** @return self */
        public static function onPath(string $path, \Throwable $cause = null)
        {
            return new self(
                'The path "' . $path . '" does not contain a valid key file',
                0,
                $cause
            );
        }
    }
} else {
    final class FileCouldNotBeRead extends InvalidArgumentException implements Exception
    {
        /**
         * @param string $path
         * @param \Exception|null $cause
         *
         * @return self
         */
        public static function onPath($path, \Exception $cause = null)
        {
            return new self(
                'The path "' . $path . '" does not contain a valid key file',
                0,
                $cause
            );
        }
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    }
}
