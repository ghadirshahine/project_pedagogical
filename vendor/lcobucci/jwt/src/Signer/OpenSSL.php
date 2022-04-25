<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT\Signer;

use Lcobucci\JWT\Signer;
use OpenSSLAsymmetricKey;

use function array_key_exists;
use function assert;
use function is_array;
use function is_bool;
use function is_string;
=======
namespace Lcobucci\JWT\Signer;

use InvalidArgumentException;
use function is_resource;
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
use function openssl_error_string;
use function openssl_free_key;
use function openssl_pkey_get_details;
use function openssl_pkey_get_private;
use function openssl_pkey_get_public;
use function openssl_sign;
use function openssl_verify;

<<<<<<< HEAD
abstract class OpenSSL implements Signer
{
    /**
     * @throws CannotSignPayload
     * @throws InvalidKeyProvided
     */
    final protected function createSignature(
        string $pem,
        string $passphrase,
        string $payload
    ): string {
        $key = $this->getPrivateKey($pem, $passphrase);
=======
abstract class OpenSSL extends BaseSigner
{
    public function createHash($payload, Key $key)
    {
        $privateKey = $this->getPrivateKey($key->getContent(), $key->getPassphrase());
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

        try {
            $signature = '';

<<<<<<< HEAD
            if (! openssl_sign($payload, $signature, $key, $this->algorithm())) {
                $error = openssl_error_string();
                assert(is_string($error));

                throw CannotSignPayload::errorHappened($error);
=======
            if (! openssl_sign($payload, $signature, $privateKey, $this->getAlgorithm())) {
                throw CannotSignPayload::errorHappened(openssl_error_string());
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
            }

            return $signature;
        } finally {
<<<<<<< HEAD
            $this->freeKey($key);
=======
            openssl_free_key($privateKey);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        }
    }

    /**
<<<<<<< HEAD
     * @return resource|OpenSSLAsymmetricKey
     *
     * @throws CannotSignPayload
     */
    private function getPrivateKey(string $pem, string $passphrase)
=======
     * @param string $pem
     * @param string $passphrase
     *
     * @return resource
     */
    private function getPrivateKey($pem, $passphrase)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $privateKey = openssl_pkey_get_private($pem, $passphrase);
        $this->validateKey($privateKey);

        return $privateKey;
    }

<<<<<<< HEAD
    /** @throws InvalidKeyProvided */
    final protected function verifySignature(
        string $expected,
        string $payload,
        string $pem
    ): bool {
        $key    = $this->getPublicKey($pem);
        $result = openssl_verify($payload, $expected, $key, $this->algorithm());
        $this->freeKey($key);
=======
    /**
     * @param $expected
     * @param $payload
     * @param $key
     * @return bool
     */
    public function doVerify($expected, $payload, Key $key)
    {
        $publicKey = $this->getPublicKey($key->getContent());
        $result    = openssl_verify($payload, $expected, $publicKey, $this->getAlgorithm());
        openssl_free_key($publicKey);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

        return $result === 1;
    }

    /**
<<<<<<< HEAD
     * @return resource|OpenSSLAsymmetricKey
     *
     * @throws InvalidKeyProvided
     */
    private function getPublicKey(string $pem)
=======
     * @param string $pem
     *
     * @return resource
     */
    private function getPublicKey($pem)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $publicKey = openssl_pkey_get_public($pem);
        $this->validateKey($publicKey);

        return $publicKey;
    }

    /**
     * Raises an exception when the key type is not the expected type
     *
<<<<<<< HEAD
     * @param resource|OpenSSLAsymmetricKey|bool $key
     *
     * @throws InvalidKeyProvided
     */
    private function validateKey($key): void
    {
        if (is_bool($key)) {
            $error = openssl_error_string();
            assert(is_string($error));

            throw InvalidKeyProvided::cannotBeParsed($error);
        }

        $details = openssl_pkey_get_details($key);
        assert(is_array($details));

        if (! array_key_exists('key', $details) || $details['type'] !== $this->keyType()) {
=======
     * @param resource|bool $key
     *
     * @throws InvalidArgumentException
     */
    private function validateKey($key)
    {
        if (! is_resource($key)) {
            throw InvalidKeyProvided::cannotBeParsed(openssl_error_string());
        }

        $details = openssl_pkey_get_details($key);

        if (! isset($details['key']) || $details['type'] !== $this->getKeyType()) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
            throw InvalidKeyProvided::incompatibleKey();
        }
    }

<<<<<<< HEAD
    /** @param resource|OpenSSLAsymmetricKey $key */
    private function freeKey($key): void
    {
        if ($key instanceof OpenSSLAsymmetricKey) {
            return;
        }

        openssl_free_key($key); // Deprecated and no longer necessary as of PHP >= 8.0
    }

=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    /**
     * Returns the type of key to be used to create/verify the signature (using OpenSSL constants)
     *
     * @internal
     */
<<<<<<< HEAD
    abstract public function keyType(): int;
=======
    abstract public function getKeyType();
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Returns which algorithm to be used to create/verify the signature (using OpenSSL constants)
     *
     * @internal
     */
<<<<<<< HEAD
    abstract public function algorithm(): int;
=======
    abstract public function getAlgorithm();
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
