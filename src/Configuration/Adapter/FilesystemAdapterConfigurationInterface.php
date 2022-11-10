<?php

namespace Micro\Plugin\Filesystem\Configuration\Adapter;

interface FilesystemAdapterConfigurationInterface
{
    /**
     * @return string|null
     */
    public function getPublicUrl(): null|string;
}