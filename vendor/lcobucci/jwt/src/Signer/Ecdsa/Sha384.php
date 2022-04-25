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

namespace Lcobucci\JWT\Signer\Ecdsa;

use Lcobucci\JWT\Signer\Ecdsa;

<<<<<<< HEAD
use const OPENSSL_ALGO_SHA384;

final class Sha384 extends Ecdsa
{
    public function algorithmId(): string
=======
/**
 * Signer for ECDSA SHA-384
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.1.0
 */
class Sha384 extends Ecdsa
{
    /**
     * {@inheritdoc}
     */
    public function getAlgorithmId()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return 'ES384';
    }

<<<<<<< HEAD
    public function algorithm(): int
    {
        return OPENSSL_ALGO_SHA384;
    }

    public function keyLength(): int
=======
    /**
     * {@inheritdoc}
     */
    public function getAlgorithm()
    {
        return 'sha384';
    }

    /**
     * {@inheritdoc}
     */
    public function getKeyLength()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return 96;
    }
}
