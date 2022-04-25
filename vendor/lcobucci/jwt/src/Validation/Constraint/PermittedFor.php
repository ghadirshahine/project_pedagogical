<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use Lcobucci\JWT\Token;
use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\ConstraintViolation;

final class PermittedFor implements Constraint
{
<<<<<<< HEAD
    private string $audience;

    public function __construct(string $audience)
=======
    /** @var string  */
    private $audience;

    public function __construct($audience)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->audience = $audience;
    }

<<<<<<< HEAD
    public function assert(Token $token): void
=======
    public function assert(Token $token)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (! $token->isPermittedFor($this->audience)) {
            throw new ConstraintViolation(
                'The token is not allowed to be used by this audience'
            );
        }
    }
}
