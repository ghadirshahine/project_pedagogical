<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation;

use Lcobucci\JWT\Token;

interface Constraint
{
    /** @throws ConstraintViolation */
<<<<<<< HEAD
    public function assert(Token $token): void;
=======
    public function assert(Token $token);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
