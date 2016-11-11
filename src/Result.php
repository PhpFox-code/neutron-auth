<?php

namespace Phpfox\AuthManager;


/**
 * Class Result
 *
 * @package Phpfox\AuthManger
 */
class Result
{
    /**
     * @var int
     */
    private $code = 0;

    /**
     * @var int
     */
    private $identity = 0;

    /**
     * @var string
     */
    private $message = '';

    /**
     * @var string
     */
    private $redirectUrl = '';

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param int $identity
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }
}