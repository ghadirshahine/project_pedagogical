<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use Lcobucci\JWT\Signer;
use Lcobucci\JWT\Token;
use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\ConstraintViolation;

final class SignedWith implements Constraint
{
<<<<<<< HEAD
    private Signer $signer;
    private Signer\Key $key;
=======
    /** @var Signer */
    private $signer;

    /** @var Signer\Key */
    private $key;
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    public function __construct(Signer $signer, Signer\Key $key)
    {
        $this->signer = $signer;
        $this->key    = $key;
    }

<<<<<<< HEAD
    public function assert(Token $token): void
    {
        if (! $token instanceof Token\Plain) {
            throw new ConstraintViolation('You should pass a plain token');
        }

        if ($token->headers()->get('alg') !== $this->signer->algorithmId()) {
            throw new ConstraintViolation('Token signer mismatch');
        }

        if (! $this->signer->verify($token->signature()->hash(), $token->payload(), $this->key)) {
=======
    public function assert(Token $token)
    {
        if ($token->headers()->get('alg') !== $this->signer->getAlgorithmId()) {
            throw new ConstraintViolation('Token signer mismatch');
        }

        if (! $this->signer->verify((string) $token->signature(), $token->getPayload(), $this->key)) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
            throw new ConstraintViolation('Token signature mismatch');
        }
    }
}
