<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT;

use Lcobucci\JWT\Signer\CannotSignPayload;
use Lcobucci\JWT\Signer\Ecdsa\ConversionFailed;
use Lcobucci\JWT\Signer\InvalidKeyProvided;
use Lcobucci\JWT\Signer\Key;

=======
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT;

use InvalidArgumentException;
use Lcobucci\JWT\Signer\Key;

/**
 * Basic interface for token signers
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 0.1.0
 */
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
interface Signer
{
    /**
     * Returns the algorithm id
<<<<<<< HEAD
     */
    public function algorithmId(): string;

    /**
     * Creates a hash for the given payload
     *
     * @throws CannotSignPayload  When payload signing fails.
     * @throws InvalidKeyProvided When issue key is invalid/incompatible.
     * @throws ConversionFailed   When signature could not be converted.
     */
    public function sign(string $payload, Key $key): string;
=======
     *
     * @return string
     */
    public function getAlgorithmId();

    /**
     * Apply changes on headers according with algorithm
     *
     * @param array $headers
     */
    public function modifyHeader(array &$headers);

    /**
     * Returns a signature for given data
     *
     * @param string $payload
     * @param Key|string $key
     *
     * @return Signature
     *
     * @throws InvalidArgumentException When given key is invalid
     */
    public function sign($payload, $key);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Returns if the expected hash matches with the data and key
     *
<<<<<<< HEAD
     * @throws InvalidKeyProvided When issue key is invalid/incompatible.
     * @throws ConversionFailed   When signature could not be converted.
     */
    public function verify(string $expected, string $payload, Key $key): bool;
=======
     * @param string $expected
     * @param string $payload
     * @param Key|string $key
     *
     * @return boolean
     *
     * @throws InvalidArgumentException When given key is invalid
     */
    public function verify($expected, $payload, $key);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
