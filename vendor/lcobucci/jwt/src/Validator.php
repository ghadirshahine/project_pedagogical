<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT;

use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\NoConstraintsGiven;
use Lcobucci\JWT\Validation\RequiredConstraintsViolated;

interface Validator
{
    /**
     * @throws RequiredConstraintsViolated
     * @throws NoConstraintsGiven
     */
<<<<<<< HEAD
    public function assert(Token $token, Constraint ...$constraints): void;

    /** @throws NoConstraintsGiven */
    public function validate(Token $token, Constraint ...$constraints): bool;
=======
    public function assert(Token $token, Constraint ...$constraints);

    /**
     * @return bool
     *
     * @throws NoConstraintsGiven
     */
    public function validate(Token $token, Constraint ...$constraints);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
