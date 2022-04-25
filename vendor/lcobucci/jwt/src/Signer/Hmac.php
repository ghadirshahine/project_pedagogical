<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT\Signer;

use Lcobucci\JWT\Signer;

use function hash_equals;
use function hash_hmac;

abstract class Hmac implements Signer
{
    final public function sign(string $payload, Key $key): string
    {
        return hash_hmac($this->algorithm(), $payload, $key->contents(), true);
    }

    final public function verify(string $expected, string $payload, Key $key): bool
    {
        return hash_equals($expected, $this->sign($payload, $key));
    }

    abstract public function algorithm(): string;
=======
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Signer;

/**
 * Base class for hmac signers
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 0.1.0
 */
abstract class Hmac extends BaseSigner
{
    /**
     * {@inheritdoc}
     */
    public function createHash($payload, Key $key)
    {
        return hash_hmac($this->getAlgorithm(), $payload, $key->getContent(), true);
    }

    /**
     * {@inheritdoc}
     */
    public function doVerify($expected, $payload, Key $key)
    {
        if (!is_string($expected)) {
            return false;
        }

        return hash_equals($expected, $this->createHash($payload, $key));
    }

    /**
     * Returns the algorithm name
     *
     * @internal
     *
     * @return string
     */
    abstract public function getAlgorithm();
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
