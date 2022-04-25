<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT;

use Closure;
<<<<<<< HEAD
use Lcobucci\JWT\Encoding\ChainedFormatter;
use Lcobucci\JWT\Encoding\JoseEncoder;
=======
use Lcobucci\JWT\Parsing\Decoder;
use Lcobucci\JWT\Parsing\Encoder;
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\None;
use Lcobucci\JWT\Validation\Constraint;

/**
 * Configuration container for the JWT Builder and Parser
 *
 * Serves like a small DI container to simplify the creation and usage
 * of the objects.
 */
final class Configuration
{
<<<<<<< HEAD
    private Parser $parser;
    private Signer $signer;
    private Key $signingKey;
    private Key $verificationKey;
    private Validator $validator;

    /** @var Closure(ClaimsFormatter $claimFormatter): Builder */
    private Closure $builderFactory;

    /** @var Constraint[] */
    private array $validationConstraints = [];
=======
    /** @var Parser */
    private $parser;

    /** @var Signer */
    private $signer;

    /** @var Key */
    private $signingKey;

    /** @var Key */
    private $verificationKey;

    /** @var Validator */
    private $validator;

    /** @var Closure(): Builder */
    private $builderFactory;

    /** @var Constraint[] */
    private $validationConstraints = [];
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

    private function __construct(
        Signer $signer,
        Key $signingKey,
        Key $verificationKey,
<<<<<<< HEAD
        ?Encoder $encoder = null,
        ?Decoder $decoder = null
=======
        Encoder $encoder = null,
        Decoder $decoder = null
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    ) {
        $this->signer          = $signer;
        $this->signingKey      = $signingKey;
        $this->verificationKey = $verificationKey;
<<<<<<< HEAD
        $this->parser          = new Token\Parser($decoder ?? new JoseEncoder());
        $this->validator       = new Validation\Validator();

        $this->builderFactory = static function (ClaimsFormatter $claimFormatter) use ($encoder): Builder {
            return new Token\Builder($encoder ?? new JoseEncoder(), $claimFormatter);
        };
    }

=======
        $this->parser          = new Parser($decoder ?: new Decoder());
        $this->validator       = new Validation\Validator();

        $this->builderFactory = static function () use ($encoder) {
            return new Builder($encoder ?: new Encoder());
        };
    }

    /** @return self */
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    public static function forAsymmetricSigner(
        Signer $signer,
        Key $signingKey,
        Key $verificationKey,
<<<<<<< HEAD
        ?Encoder $encoder = null,
        ?Decoder $decoder = null
    ): self {
=======
        Encoder $encoder = null,
        Decoder $decoder = null
    ) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        return new self(
            $signer,
            $signingKey,
            $verificationKey,
            $encoder,
            $decoder
        );
    }

<<<<<<< HEAD
    public static function forSymmetricSigner(
        Signer $signer,
        Key $key,
        ?Encoder $encoder = null,
        ?Decoder $decoder = null
    ): self {
=======
    /** @return self */
    public static function forSymmetricSigner(
        Signer $signer,
        Key $key,
        Encoder $encoder = null,
        Decoder $decoder = null
    ) {
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
        return new self(
            $signer,
            $key,
            $key,
            $encoder,
            $decoder
        );
    }

<<<<<<< HEAD
    public static function forUnsecuredSigner(
        ?Encoder $encoder = null,
        ?Decoder $decoder = null
    ): self {
        $key = InMemory::empty();
=======
    /** @return self */
    public static function forUnsecuredSigner(
        Encoder $encoder = null,
        Decoder $decoder = null
    ) {
        $key = InMemory::plainText('');
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

        return new self(
            new None(),
            $key,
            $key,
            $encoder,
            $decoder
        );
    }

<<<<<<< HEAD
    /** @param callable(ClaimsFormatter): Builder $builderFactory */
    public function setBuilderFactory(callable $builderFactory): void
    {
        $this->builderFactory = Closure::fromCallable($builderFactory);
    }

    public function builder(?ClaimsFormatter $claimFormatter = null): Builder
    {
        return ($this->builderFactory)($claimFormatter ?? ChainedFormatter::default());
    }

    public function parser(): Parser
=======
    /** @param callable(): Builder $builderFactory */
    public function setBuilderFactory(callable $builderFactory)
    {
        if (! $builderFactory instanceof Closure) {
            $builderFactory = static function() use ($builderFactory) {
                return $builderFactory();
            };
        }
        $this->builderFactory = $builderFactory;
    }

    /** @return Builder */
    public function builder()
    {
        $factory = $this->builderFactory;

        return $factory();
    }

    /** @return Parser */
    public function parser()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->parser;
    }

<<<<<<< HEAD
    public function setParser(Parser $parser): void
=======
    public function setParser(Parser $parser)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->parser = $parser;
    }

<<<<<<< HEAD
    public function signer(): Signer
=======
    /** @return Signer */
    public function signer()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->signer;
    }

<<<<<<< HEAD
    public function signingKey(): Key
=======
    /** @return Key */
    public function signingKey()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->signingKey;
    }

<<<<<<< HEAD
    public function verificationKey(): Key
=======
    /** @return Key */
    public function verificationKey()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->verificationKey;
    }

<<<<<<< HEAD
    public function validator(): Validator
=======
    /** @return Validator */
    public function validator()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->validator;
    }

<<<<<<< HEAD
    public function setValidator(Validator $validator): void
=======
    public function setValidator(Validator $validator)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->validator = $validator;
    }

    /** @return Constraint[] */
<<<<<<< HEAD
    public function validationConstraints(): array
=======
    public function validationConstraints()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->validationConstraints;
    }

<<<<<<< HEAD
    public function setValidationConstraints(Constraint ...$validationConstraints): void
=======
    public function setValidationConstraints(Constraint ...$validationConstraints)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->validationConstraints = $validationConstraints;
    }
}
