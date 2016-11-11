<?php
namespace Phpfox\AuthManager;

/**
 * Interface AdapterInterface
 *
 * @package Phpfox\AuthManager
 */
interface AdapterInterface
{
    /**
     * @return Result
     */
    public function authenticate();
}