<?php
<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d

namespace Lcobucci\JWT\Token;

use function array_key_exists;

final class DataSet
{
    /** @var array<string, mixed> */
<<<<<<< HEAD
    private array $data;
    private string $encoded;

    /** @param mixed[] $data */
    public function __construct(array $data, string $encoded)
=======
    private $data;
    /** @var string */
    private $encoded;

    /**
     * @param array<string, mixed> $data
     * @param string               $encoded
     */
    public function __construct(array $data, $encoded)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        $this->data    = $data;
        $this->encoded = $encoded;
    }

    /**
<<<<<<< HEAD
=======
     * @param string     $name
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
     * @param mixed|null $default
     *
     * @return mixed|null
     */
<<<<<<< HEAD
    public function get(string $name, $default = null)
    {
        return $this->data[$name] ?? $default;
    }

    public function has(string $name): bool
=======
    public function get($name, $default = null)
    {
        return $this->has($name) ? $this->data[$name] : $default;
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has($name)
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return array_key_exists($name, $this->data);
    }

<<<<<<< HEAD
    /** @return mixed[] */
    public function all(): array
=======
    /** @return array<string, mixed> */
    public function all()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->data;
    }

<<<<<<< HEAD
    public function toString(): string
=======
    /** @return string */
    public function toString()
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
    {
        return $this->encoded;
    }
}
