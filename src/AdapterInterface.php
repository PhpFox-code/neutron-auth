<?php
namespace Phpfox\Auth;

/**
 * Interface AdapterInterface
 *
 * @package Phpfox\Auth
 */
interface AdapterInterface
{
    /**
     * @return Result
     */
    public function authenticate();
}