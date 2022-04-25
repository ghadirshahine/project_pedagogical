<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use Lcobucci\JWT\Token;
use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\ConstraintViolation;

final class RelatedTo implements Constraint
{
<<<<<<< HEAD
    private string $subject;

    public function __construct(string $subject)
=======
    /** @var string */
    private $subject;

    public function __construct($subject)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->subject = $subject;
    }

<<<<<<< HEAD
    public function assert(Token $token): void
=======
    public function assert(Token $token)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (! $token->isRelatedTo($this->subject)) {
            throw new ConstraintViolation(
                'The token is not related to the expected subject'
            );
        }
    }
}
