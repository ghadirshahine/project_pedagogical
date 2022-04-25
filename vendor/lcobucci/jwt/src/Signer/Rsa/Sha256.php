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

namespace Lcobucci\JWT\Signer\Rsa;

use Lcobucci\JWT\Signer\Rsa;

<<<<<<< HEAD
use const OPENSSL_ALGO_SHA256;

final class Sha256 extends Rsa
{
    public function algorithmId(): string
=======
/**
 * Signer for RSA SHA-256
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.1.0
 */
class Sha256 extends Rsa
{
    /**
     * {@inheritdoc}
     */
    public function getAlgorithmId()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return 'RS256';
    }

<<<<<<< HEAD
    public function algorithm(): int
=======
    /**
     * {@inheritdoc}
     */
    public function getAlgorithm()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return OPENSSL_ALGO_SHA256;
    }
}
