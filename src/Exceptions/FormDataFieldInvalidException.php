<?php

namespace Taugust\CommonLibary\Exceptions;

class FormDataFieldInvalidException extends FormException
{
    public function __construct(string|array $formField,string $message = "", int $code = 0, \Throwable $previous = null)
    {
        if (empty($message) && empty($formField)) {
            if(is_array($formField)) {
                $formFields = implode(",", $formField);
                $message = "You must provide a valid data for following fields: ".$formFields;
            }elseif(is_string($formField)) {
                $message = "You must provide a valid data for following field: ".$formField;
            }
        }
        parent::__construct($message, $code, $previous);
    }
}