<?php

namespace Taugust\CommonLibary\Exceptions;

class UserException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}