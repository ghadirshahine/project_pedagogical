<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation;

use Lcobucci\JWT\Token;

final class Validator implements \Lcobucci\JWT\Validator
{
<<<<<<< HEAD
    public function assert(Token $token, Constraint ...$constraints): void
=======
    public function assert(Token $token, Constraint ...$constraints)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if ($constraints === []) {
            throw new NoConstraintsGiven('No constraint given.');
        }

        $violations = [];

        foreach ($constraints as $constraint) {
            $this->checkConstraint($constraint, $token, $violations);
        }

        if ($violations) {
            throw RequiredConstraintsViolated::fromViolations(...$violations);
        }
    }

    /** @param ConstraintViolation[] $violations */
    private function checkConstraint(
        Constraint $constraint,
        Token $token,
        array &$violations
<<<<<<< HEAD
    ): void {
=======
    ) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        try {
            $constraint->assert($token);
        } catch (ConstraintViolation $e) {
            $violations[] = $e;
        }
    }

<<<<<<< HEAD
    public function validate(Token $token, Constraint ...$constraints): bool
=======
    public function validate(Token $token, Constraint ...$constraints)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if ($constraints === []) {
            throw new NoConstraintsGiven('No constraint given.');
        }

        try {
            foreach ($constraints as $constraint) {
                $constraint->assert($token);
            }

            return true;
        } catch (ConstraintViolation $e) {
            return false;
        }
    }
}
