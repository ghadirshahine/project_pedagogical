<?php
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @link https://github.com/web-token/jwt-framework/blob/v1.2/src/Component/Core/Util/ECSignature.php
 */
<<<<<<< HEAD

namespace Lcobucci\JWT\Signer\Ecdsa;

use function assert;
=======
namespace Lcobucci\JWT\Signer\Ecdsa;

>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
use function bin2hex;
use function dechex;
use function hex2bin;
use function hexdec;
<<<<<<< HEAD
use function is_string;
use function mb_strlen;
use function mb_substr;
use function str_pad;

=======
use function mb_strlen;
use function mb_substr;
use function str_pad;
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
use const STR_PAD_LEFT;

/**
 * ECDSA signature converter using ext-mbstring
 *
 * @internal
 */
final class MultibyteStringConverter implements SignatureConverter
{
<<<<<<< HEAD
    private const ASN1_SEQUENCE          = '30';
    private const ASN1_INTEGER           = '02';
    private const ASN1_MAX_SINGLE_BYTE   = 128;
    private const ASN1_LENGTH_2BYTES     = '81';
    private const ASN1_BIG_INTEGER_LIMIT = '7f';
    private const ASN1_NEGATIVE_INTEGER  = '00';
    private const BYTE_SIZE              = 2;

    public function toAsn1(string $points, int $length): string
    {
        $points = bin2hex($points);

        if (self::octetLength($points) !== $length) {
            throw ConversionFailed::invalidLength();
        }

        $pointR = self::preparePositiveInteger(mb_substr($points, 0, $length, '8bit'));
        $pointS = self::preparePositiveInteger(mb_substr($points, $length, null, '8bit'));
=======
    const ASN1_SEQUENCE          = '30';
    const ASN1_INTEGER           = '02';
    const ASN1_MAX_SINGLE_BYTE   = 128;
    const ASN1_LENGTH_2BYTES     = '81';
    const ASN1_BIG_INTEGER_LIMIT = '7f';
    const ASN1_NEGATIVE_INTEGER  = '00';
    const BYTE_SIZE              = 2;

    public function toAsn1($signature, $length)
    {
        $signature = bin2hex($signature);

        if (self::octetLength($signature) !== $length) {
            throw ConversionFailed::invalidLength();
        }

        $pointR = self::preparePositiveInteger(mb_substr($signature, 0, $length, '8bit'));
        $pointS = self::preparePositiveInteger(mb_substr($signature, $length, null, '8bit'));
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

        $lengthR = self::octetLength($pointR);
        $lengthS = self::octetLength($pointS);

        $totalLength  = $lengthR + $lengthS + self::BYTE_SIZE + self::BYTE_SIZE;
        $lengthPrefix = $totalLength > self::ASN1_MAX_SINGLE_BYTE ? self::ASN1_LENGTH_2BYTES : '';

        $asn1 = hex2bin(
            self::ASN1_SEQUENCE
            . $lengthPrefix . dechex($totalLength)
            . self::ASN1_INTEGER . dechex($lengthR) . $pointR
            . self::ASN1_INTEGER . dechex($lengthS) . $pointS
        );
<<<<<<< HEAD
        assert(is_string($asn1));
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

        return $asn1;
    }

<<<<<<< HEAD
    private static function octetLength(string $data): int
=======
    private static function octetLength($data)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return (int) (mb_strlen($data, '8bit') / self::BYTE_SIZE);
    }

<<<<<<< HEAD
    private static function preparePositiveInteger(string $data): string
=======
    private static function preparePositiveInteger($data)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (mb_substr($data, 0, self::BYTE_SIZE, '8bit') > self::ASN1_BIG_INTEGER_LIMIT) {
            return self::ASN1_NEGATIVE_INTEGER . $data;
        }

<<<<<<< HEAD
        while (
            mb_substr($data, 0, self::BYTE_SIZE, '8bit') === self::ASN1_NEGATIVE_INTEGER
            && mb_substr($data, 2, self::BYTE_SIZE, '8bit') <= self::ASN1_BIG_INTEGER_LIMIT
        ) {
=======
        while (mb_substr($data, 0, self::BYTE_SIZE, '8bit') === self::ASN1_NEGATIVE_INTEGER
            && mb_substr($data, 2, self::BYTE_SIZE, '8bit') <= self::ASN1_BIG_INTEGER_LIMIT) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
            $data = mb_substr($data, 2, null, '8bit');
        }

        return $data;
    }

<<<<<<< HEAD
    public function fromAsn1(string $signature, int $length): string
=======
    public function fromAsn1($signature, $length)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $message  = bin2hex($signature);
        $position = 0;

        if (self::readAsn1Content($message, $position, self::BYTE_SIZE) !== self::ASN1_SEQUENCE) {
            throw ConversionFailed::incorrectStartSequence();
        }

<<<<<<< HEAD
        // @phpstan-ignore-next-line
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        if (self::readAsn1Content($message, $position, self::BYTE_SIZE) === self::ASN1_LENGTH_2BYTES) {
            $position += self::BYTE_SIZE;
        }

        $pointR = self::retrievePositiveInteger(self::readAsn1Integer($message, $position));
        $pointS = self::retrievePositiveInteger(self::readAsn1Integer($message, $position));

        $points = hex2bin(str_pad($pointR, $length, '0', STR_PAD_LEFT) . str_pad($pointS, $length, '0', STR_PAD_LEFT));
<<<<<<< HEAD
        assert(is_string($points));
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

        return $points;
    }

<<<<<<< HEAD
    private static function readAsn1Content(string $message, int &$position, int $length): string
=======
    private static function readAsn1Content($message, &$position, $length)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $content   = mb_substr($message, $position, $length, '8bit');
        $position += $length;

        return $content;
    }

<<<<<<< HEAD
    private static function readAsn1Integer(string $message, int &$position): string
=======
    private static function readAsn1Integer($message, &$position)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (self::readAsn1Content($message, $position, self::BYTE_SIZE) !== self::ASN1_INTEGER) {
            throw ConversionFailed::integerExpected();
        }

        $length = (int) hexdec(self::readAsn1Content($message, $position, self::BYTE_SIZE));

        return self::readAsn1Content($message, $position, $length * self::BYTE_SIZE);
    }

<<<<<<< HEAD
    private static function retrievePositiveInteger(string $data): string
    {
        while (
            mb_substr($data, 0, self::BYTE_SIZE, '8bit') === self::ASN1_NEGATIVE_INTEGER
            && mb_substr($data, 2, self::BYTE_SIZE, '8bit') > self::ASN1_BIG_INTEGER_LIMIT
        ) {
=======
    private static function retrievePositiveInteger($data)
    {
        while (mb_substr($data, 0, self::BYTE_SIZE, '8bit') === self::ASN1_NEGATIVE_INTEGER
            && mb_substr($data, 2, self::BYTE_SIZE, '8bit') > self::ASN1_BIG_INTEGER_LIMIT) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
            $data = mb_substr($data, 2, null, '8bit');
        }

        return $data;
    }
}
