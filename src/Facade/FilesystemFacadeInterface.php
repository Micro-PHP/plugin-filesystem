<?php

namespace Micro\Plugin\Filesystem\Facade;

use League\Flysystem\FilesystemOperator;
use Micro\Plugin\Filesystem\Configuration\FilesystemPluginConfigurationInterface;

interface FilesystemFacadeInterface
{
    /**
     * @param string $adapterName
     *
     * @return FilesystemOperator
     */
    public function createFsOperator(string $adapterName = FilesystemPluginConfigurationInterface::ADAPTER_DEFAULT): FilesystemOperator;
}