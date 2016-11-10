<?php

namespace Phpfox\Auth;

/**
 * Interface StorageInterface
 *
 * @package Phpfox\Auth
 */
interface StorageInterface
{
    public function store();

    public function restore();
}