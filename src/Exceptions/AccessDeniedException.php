<?php

namespace Taugust\CommonLibary\Exceptions;
use Taugust\CommonLibary\ENUMs\UserRole;

class AccessDeniedException extends UserException
{
    public function __construct(UserRole $UserRole,$message = "", $code = 0, \Throwable $previous = null)
    {
        if(empty($message)){
            $message = "Access Denied: You Role ".$UserRole->value." doesnt match the needed Rights for this action";
        }
        parent::__construct($message, $code, $previous);
    }

}