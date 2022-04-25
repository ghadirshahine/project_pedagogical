<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace Lcobucci\JWT;

use Throwable;

interface Exception extends Throwable
{
=======

namespace Lcobucci\JWT;

if (PHP_MAJOR_VERSION === 5) {
    interface Exception
    {
    }
} else {
    interface Exception extends \Throwable
    {
    }
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
}
