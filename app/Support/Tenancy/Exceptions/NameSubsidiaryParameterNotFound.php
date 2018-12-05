<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 09:09
 */

namespace App\Support\Tenancy\Exceptions;


use Exception;
use Throwable;

/**
 * Class NameSubsidiaryParameterNotFound
 * @package App\Support\Tenancy\Exceptions
 */
class NameSubsidiaryParameterNotFound extends Exception
{

    public function __construct( string $name, string $message = "", int $code = 0, Throwable $previous = null )
    {
        $message = "The {$name} parameter was not find in this Subsidiary.\n" . $message;
        parent::__construct($message, $code, $previous);
    }

}