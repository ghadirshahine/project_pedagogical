<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use Lcobucci\JWT\Token;
use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\ConstraintViolation;

final class IdentifiedBy implements Constraint
{
<<<<<<< HEAD
    private string $id;

    public function __construct(string $id)
=======
    /** @var string */
    private $id;

    /** @param string $id */
    public function __construct($id)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->id = $id;
    }

<<<<<<< HEAD
    public function assert(Token $token): void
=======
    public function assert(Token $token)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (! $token->isIdentifiedBy($this->id)) {
            throw new ConstraintViolation(
                'The token is not identified with the expected ID'
            );
        }
    }
}
