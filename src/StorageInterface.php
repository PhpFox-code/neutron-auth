<?php

namespace Phpfox\AuthManager;

/**
 * Interface StorageInterface
 *
 * @package Phpfox\AuthManager
 */
interface StorageInterface
{
    public function store();

    public function restore();
}