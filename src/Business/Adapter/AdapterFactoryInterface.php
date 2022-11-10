<?php

namespace Micro\Plugin\Filesystem\Business\Adapter;

use League\Flysystem\FilesystemAdapter;
use Micro\Plugin\Filesystem\Configuration\Adapter\FilesystemAdapterConfigurationInterface;

interface AdapterFactoryInterface
{
    /**
     * @param FilesystemAdapterConfigurationInterface $adapterConfiguration
     *
     * @return FilesystemAdapter
     */
    public function create(FilesystemAdapterConfigurationInterface $adapterConfiguration): FilesystemAdapter;
}