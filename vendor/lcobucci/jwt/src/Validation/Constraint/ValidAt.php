<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation\Constraint;

use DateInterval;
use DateTimeInterface;
use Lcobucci\Clock\Clock;
use Lcobucci\JWT\Token;
use Lcobucci\JWT\Validation\Constraint;
use Lcobucci\JWT\Validation\ConstraintViolation;

final class ValidAt implements Constraint
{
<<<<<<< HEAD
    private Clock $clock;
    private DateInterval $leeway;

    public function __construct(Clock $clock, ?DateInterval $leeway = null)
=======
    /** @var Clock */
    private $clock;

    /** @var DateInterval */
    private $leeway;

    public function __construct(Clock $clock, DateInterval $leeway = null)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->clock  = $clock;
        $this->leeway = $this->guardLeeway($leeway);
    }

<<<<<<< HEAD
    private function guardLeeway(?DateInterval $leeway): DateInterval
=======
    /** @return DateInterval */
    private function guardLeeway(DateInterval $leeway = null)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if ($leeway === null) {
            return new DateInterval('PT0S');
        }

        if ($leeway->invert === 1) {
            throw LeewayCannotBeNegative::create();
        }

        return $leeway;
    }

<<<<<<< HEAD
    public function assert(Token $token): void
=======
    public function assert(Token $token)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $now = $this->clock->now();

        $this->assertIssueTime($token, $now->add($this->leeway));
        $this->assertMinimumTime($token, $now->add($this->leeway));
        $this->assertExpiration($token, $now->sub($this->leeway));
    }

    /** @throws ConstraintViolation */
<<<<<<< HEAD
    private function assertExpiration(Token $token, DateTimeInterface $now): void
=======
    private function assertExpiration(Token $token, DateTimeInterface $now)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if ($token->isExpired($now)) {
            throw new ConstraintViolation('The token is expired');
        }
    }

    /** @throws ConstraintViolation */
<<<<<<< HEAD
    private function assertMinimumTime(Token $token, DateTimeInterface $now): void
=======
    private function assertMinimumTime(Token $token, DateTimeInterface $now)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (! $token->isMinimumTimeBefore($now)) {
            throw new ConstraintViolation('The token cannot be used yet');
        }
    }

    /** @throws ConstraintViolation */
<<<<<<< HEAD
    private function assertIssueTime(Token $token, DateTimeInterface $now): void
=======
    private function assertIssueTime(Token $token, DateTimeInterface $now)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (! $token->hasBeenIssuedBefore($now)) {
            throw new ConstraintViolation('The token was issued in the future');
        }
    }
}
