<?php

namespace Micro\Plugin\Filesystem\Business\FS;

use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemOperator;
use Micro\Plugin\Filesystem\Business\Adapter\AdapterFactoryInterface;
use Micro\Plugin\Filesystem\Configuration\FilesystemPluginConfigurationInterface;

class FsFactory implements FsFactoryInterface
{
    /**
     * @param FilesystemPluginConfigurationInterface $pluginConfiguration
     * @param AdapterFactoryInterface $adapterFactory
     */
    public function __construct(
        private readonly FilesystemPluginConfigurationInterface $pluginConfiguration,
        private readonly AdapterFactoryInterface $adapterFactory
    )
    {
    }

    /**
     * {@inheritDoc}
     */
    public function create($adapterName): FilesystemOperator
    {
        $adapterConfiguration = $this->pluginConfiguration->getAdapterConfiguration($adapterName);;
        $adapter = $this->adapterFactory->create($adapterConfiguration);

        $options = [];
        $publicUrl = $adapterConfiguration->getPublicUrl();
        if($publicUrl) {
            $options[] = $publicUrl;
        }

        return new Filesystem($adapter, $options);
    }
}