<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Signer;

use const OPENSSL_KEYTYPE_RSA;

<<<<<<< HEAD
abstract class Rsa extends OpenSSL
{
    final public function sign(string $payload, Key $key): string
    {
        return $this->createSignature($key->contents(), $key->passphrase(), $payload);
    }

    final public function verify(string $expected, string $payload, Key $key): bool
    {
        return $this->verifySignature($expected, $payload, $key->contents());
    }

    final public function keyType(): int
=======
/**
 * Base class for RSASSA-PKCS1 signers
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.1.0
 */
abstract class Rsa extends OpenSSL
{
    final public function getKeyType()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return OPENSSL_KEYTYPE_RSA;
    }
}
