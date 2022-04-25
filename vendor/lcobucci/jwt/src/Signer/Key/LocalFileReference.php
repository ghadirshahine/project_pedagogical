<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Signer\Key;

use Lcobucci\JWT\Signer\Key;

use function file_exists;
use function strpos;
use function substr;

<<<<<<< HEAD
/** @deprecated please use {@see InMemory} instead */
final class LocalFileReference implements Key
{
    private const PATH_PREFIX = 'file://';

    private string $path;
    private string $passphrase;
    private string $contents;

    private function __construct(string $path, string $passphrase)
    {
        $this->path       = $path;
        $this->passphrase = $passphrase;
    }

    /** @throws FileCouldNotBeRead */
    public static function file(string $path, string $passphrase = ''): self
=======
/** @deprecated Use \Lcobucci\JWT\Signer\Key\InMemory::file() instead */
final class LocalFileReference extends Key
{
    const PATH_PREFIX = 'file://';

    /**
     * @param string $path
     * @param string $passphrase
     *
     * @return self
     *
     * @throws FileCouldNotBeRead
     */
    public static function file($path, $passphrase = '')
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        if (strpos($path, self::PATH_PREFIX) === 0) {
            $path = substr($path, 7);
        }

<<<<<<< HEAD
        if (! file_exists($path)) {
            throw FileCouldNotBeRead::onPath($path);
        }

        return new self($path, $passphrase);
    }

    public function contents(): string
    {
        if (! isset($this->contents)) {
            $this->contents = InMemory::file($this->path)->contents();
        }

        return $this->contents;
    }

    public function passphrase(): string
    {
        return $this->passphrase;
=======
        return new self(self::PATH_PREFIX . $path, $passphrase);
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    }
}
