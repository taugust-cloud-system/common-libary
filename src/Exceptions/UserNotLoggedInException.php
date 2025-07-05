<?php

namespace Taugust\CommonLibary\Exceptions;

class UserNotLoggedInException extends UserException
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if(empty($message)) {
            $message = "No Access, please login first";
        }
        parent::__construct($message, $code, $previous);
    }
}