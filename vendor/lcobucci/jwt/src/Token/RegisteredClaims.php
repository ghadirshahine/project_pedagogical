<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Token;

/**
 * Defines the list of claims that are registered in the IANA "JSON Web Token Claims" registry
 *
 * @see https://tools.ietf.org/html/rfc7519#section-4.1
 */
interface RegisteredClaims
{
<<<<<<< HEAD
    public const ALL = [
=======
    const ALL = [
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        self::AUDIENCE,
        self::EXPIRATION_TIME,
        self::ID,
        self::ISSUED_AT,
        self::ISSUER,
        self::NOT_BEFORE,
        self::SUBJECT,
    ];

<<<<<<< HEAD
    public const DATE_CLAIMS = [
=======
    const DATE_CLAIMS = [
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        self::ISSUED_AT,
        self::NOT_BEFORE,
        self::EXPIRATION_TIME,
    ];

    /**
     * Identifies the recipients that the JWT is intended for
     *
     * @see https://tools.ietf.org/html/rfc7519#section-4.1.3
     */
<<<<<<< HEAD
    public const AUDIENCE = 'aud';
=======
    const AUDIENCE = 'aud';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Identifies the expiration time on or after which the JWT MUST NOT be accepted for processing
     *
     * @see https://tools.ietf.org/html/rfc7519#section-4.1.4
     */
<<<<<<< HEAD
    public const EXPIRATION_TIME = 'exp';
=======
    const EXPIRATION_TIME = 'exp';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Provides a unique identifier for the JWT
     *
     * @see https://tools.ietf.org/html/rfc7519#section-4.1.7
     */
<<<<<<< HEAD
    public const ID = 'jti';
=======
    const ID = 'jti';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Identifies the time at which the JWT was issued
     *
     * @see https://tools.ietf.org/html/rfc7519#section-4.1.6
     */
<<<<<<< HEAD
    public const ISSUED_AT = 'iat';
=======
    const ISSUED_AT = 'iat';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Identifies the principal that issued the JWT
     *
     * @see https://tools.ietf.org/html/rfc7519#section-4.1.1
     */
<<<<<<< HEAD
    public const ISSUER = 'iss';
=======
    const ISSUER = 'iss';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Identifies the time before which the JWT MUST NOT be accepted for processing
     *
     * https://tools.ietf.org/html/rfc7519#section-4.1.5
     */
<<<<<<< HEAD
    public const NOT_BEFORE = 'nbf';
=======
    const NOT_BEFORE = 'nbf';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    /**
     * Identifies the principal that is the subject of the JWT.
     *
     * https://tools.ietf.org/html/rfc7519#section-4.1.2
     */
<<<<<<< HEAD
    public const SUBJECT = 'sub';
=======
    const SUBJECT = 'sub';
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
