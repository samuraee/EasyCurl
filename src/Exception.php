<?php

namespace Samuraee\EasyCurl;

use Throwable;

/**
 * Easy Exceptions class
 */
class Exception extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous) ;
    }
}
