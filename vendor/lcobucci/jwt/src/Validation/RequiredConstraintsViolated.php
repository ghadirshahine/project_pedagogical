<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Validation;

use Lcobucci\JWT\Exception;
use RuntimeException;

use function array_map;
use function implode;

final class RequiredConstraintsViolated extends RuntimeException implements Exception
{
    /** @var ConstraintViolation[] */
<<<<<<< HEAD
    private array $violations = [];

    public static function fromViolations(ConstraintViolation ...$violations): self
=======
    private $violations = [];

    /**
     * @param ConstraintViolation ...$violations
     * @return self
     */
    public static function fromViolations(ConstraintViolation ...$violations)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $exception             = new self(self::buildMessage($violations));
        $exception->violations = $violations;

        return $exception;
    }

<<<<<<< HEAD
    /** @param ConstraintViolation[] $violations */
    private static function buildMessage(array $violations): string
    {
        $violations = array_map(
            static function (ConstraintViolation $violation): string {
=======
    /**
     * @param ConstraintViolation[] $violations
     *
     * @return string
     */
    private static function buildMessage(array $violations)
    {
        $violations = array_map(
            static function (ConstraintViolation $violation) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
                return '- ' . $violation->getMessage();
            },
            $violations
        );

        $message  = "The token violates some mandatory constraints, details:\n";
        $message .= implode("\n", $violations);

        return $message;
    }

    /** @return ConstraintViolation[] */
<<<<<<< HEAD
    public function violations(): array
=======
    public function violations()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->violations;
    }
}
