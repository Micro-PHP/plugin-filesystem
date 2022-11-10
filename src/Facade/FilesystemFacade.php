<?php

namespace Micro\Plugin\Filesystem\Facade;

use League\Flysystem\FilesystemOperator;
use Micro\Plugin\Filesystem\Configuration\FilesystemPluginConfigurationInterface;

class FilesystemFacade implements FilesystemFacadeInterface
{
    /**
     * {@inheritDoc}
     */
    public function createFsOperator(string $adapterName = FilesystemPluginConfigurationInterface::ADAPTER_DEFAULT): FilesystemOperator
    {
        throw new \Exception('For the plugin to work, you need to install one or more filesystem adapters.');
    }
}