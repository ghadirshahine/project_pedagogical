<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use Lcobucci\JWT\Token;
use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\ConstraintViolation;

final class IssuedBy implements Constraint
{
    /** @var string[] */
<<<<<<< HEAD
    private array $issuers;

    public function __construct(string ...$issuers)
=======
    private $issuers;

    /** @param list<string> $issuers */
    public function __construct(...$issuers)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->issuers = $issuers;
    }

<<<<<<< HEAD
    public function assert(Token $token): void
=======
    public function assert(Token $token)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (! $token->hasBeenIssuedBy(...$this->issuers)) {
            throw new ConstraintViolation(
                'The token was not issued by the given issuers'
            );
        }
    }
}
