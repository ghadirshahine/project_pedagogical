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

namespace Lcobucci\JWT\Signer\Hmac;

use Lcobucci\JWT\Signer\Hmac;

<<<<<<< HEAD
final class Sha256 extends Hmac
{
    public function algorithmId(): string
=======
/**
 * Signer for HMAC SHA-256
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 0.1.0
 */
class Sha256 extends Hmac
{
    /**
     * {@inheritdoc}
     */
    public function getAlgorithmId()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return 'HS256';
    }

<<<<<<< HEAD
    public function algorithm(): string
=======
    /**
     * {@inheritdoc}
     */
    public function getAlgorithm()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return 'sha256';
    }
}
