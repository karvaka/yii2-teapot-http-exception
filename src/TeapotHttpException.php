<?php
namespace deathburger\teapot;

use yii\web\HttpException;

/**
 * TeapotHttpException represents a "I'm a teapot" HTTP exception with status code 418.
 *
 * @author Dmitry Karvaka <deathburger777@gmail.com>
 */
class TeapotHttpException extends HttpException
{
    /**
     * Constructor.
     * @param string $message error message
     * @param int $code error code
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(418, $message, $code, $previous);
    }
}