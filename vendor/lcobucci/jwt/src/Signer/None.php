<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT\Signer;

use Lcobucci\JWT\Signer;

final class None implements Signer
{
    public function algorithmId(): string
=======

namespace Lcobucci\JWT\Signer;

final class None extends BaseSigner
{
    public function getAlgorithmId()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return 'none';
    }

<<<<<<< HEAD
    // @phpcs:ignore SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
    public function sign(string $payload, Key $key): string
=======
    public function createHash($payload, Key $key)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return '';
    }

<<<<<<< HEAD
    // @phpcs:ignore SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
    public function verify(string $expected, string $payload, Key $key): bool
=======
    public function doVerify($expected, $payload, Key $key)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $expected === '';
    }
}
