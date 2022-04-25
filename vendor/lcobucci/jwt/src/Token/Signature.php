<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT\Token;

final class Signature
{
    private string $hash;
    private string $encoded;

    public function __construct(string $hash, string $encoded)
    {
        $this->hash    = $hash;
        $this->encoded = $encoded;
    }

    public static function fromEmptyData(): self
    {
        return new self('', '');
    }

    public function hash(): string
    {
        return $this->hash;
    }

    /**
     * Returns the encoded version of the signature
     */
    public function toString(): string
    {
        return $this->encoded;
    }
}
=======

namespace Lcobucci\JWT\Token;

use Lcobucci\JWT\Signature as SignatureImpl;
use function class_alias;

class_exists(Signature::class, false) || class_alias(SignatureImpl::class, Signature::class);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
