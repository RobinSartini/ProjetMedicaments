<?php

namespace  App\Exceptions;
use Exception;

class MonException extends Exception
{
    protected $message = 'Unknown exception';   //Message d'erreur
    private $string;                           // inconnu
    protected $code = 0;                       //code d'erreur de l'utilisateur

    private $trace;

    public function __construct(string $message,$code = 0, Exception $previous = null)
    {
        if (!$message) {
            throw new $this('Unknown' .get_class($this));
        }
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return get_class($this) . "'{$this->message}' in {$this->file} ({$this->line}]\n"
                                . "{$this->getTraceAsString()}";
    }

}
