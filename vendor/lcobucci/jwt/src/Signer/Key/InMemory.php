<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Signer\Key;

use Lcobucci\JWT\Encoding\CannotDecodeContent;
use Lcobucci\JWT\Signer\Key;
<<<<<<< HEAD
use SplFileObject;
use Throwable;

use function assert;
use function base64_decode;
use function is_string;

final class InMemory implements Key
{
    private string $contents;
    private string $passphrase;

    private function __construct(string $contents, string $passphrase)
    {
        $this->contents   = $contents;
        $this->passphrase = $passphrase;
    }

    public static function empty(): self
    {
        return new self('', '');
    }

    public static function plainText(string $contents, string $passphrase = ''): self
=======

use function base64_decode;

final class InMemory extends Key
{
    /**
     * @param string $contents
     * @param string $passphrase
     *
     * @return self
     */
    public static function plainText($contents, $passphrase = '')
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return new self($contents, $passphrase);
    }

<<<<<<< HEAD
    public static function base64Encoded(string $contents, string $passphrase = ''): self
=======
    /**
     * @param string $contents
     * @param string $passphrase
     *
     * @return self
     */
    public static function base64Encoded($contents, $passphrase = '')
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $decoded = base64_decode($contents, true);

        if ($decoded === false) {
            throw CannotDecodeContent::invalidBase64String();
        }

        return new self($decoded, $passphrase);
    }

<<<<<<< HEAD
    /** @throws FileCouldNotBeRead */
    public static function file(string $path, string $passphrase = ''): self
    {
        try {
            $file = new SplFileObject($path);
        } catch (Throwable $exception) {
            throw FileCouldNotBeRead::onPath($path, $exception);
        }

        $contents = $file->fread($file->getSize());
        assert(is_string($contents));

        return new self($contents, $passphrase);
    }

    public function contents(): string
    {
        return $this->contents;
    }

    public function passphrase(): string
    {
        return $this->passphrase;
=======
    /**
     * @param string $path
     * @param string $passphrase
     *
     * @return InMemory
     *
     * @throws FileCouldNotBeRead
     */
    public static function file($path, $passphrase = '')
    {
        return new self('file://' . $path, $passphrase);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    }
}
