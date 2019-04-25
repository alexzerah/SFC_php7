<?php


namespace AppBundle\Exception;


final class NoCookiesLeft extends \Exception
{
    public function __construct($message = 'There are no more cookies :(', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
