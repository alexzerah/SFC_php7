<?php


namespace AppBundle\Exception;


use Throwable;

final class NoCookiesForYou extends \Exception
{
    public function __construct($message = "No cookie for you", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
