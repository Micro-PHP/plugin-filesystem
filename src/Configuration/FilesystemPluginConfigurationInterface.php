<?php

namespace Micro\Plugin\Filesystem\Configuration;

use Micro\Framework\Kernel\Configuration\PluginRoutingKeyConfiguration;
use Micro\Plugin\Filesystem\Configuration\Adapter\FilesystemAdapterConfigurationInterface;

interface FilesystemPluginConfigurationInterface
{
    public const ADAPTER_DEFAULT = 'default';

    /**
     * @param string $adapterName
     * @param class-string<PluginRoutingKeyConfiguration<FilesystemPluginConfigurationInterface>> $adapterCfgClass
     *
     * @return FilesystemAdapterConfigurationInterface
     */
    public function createAdapterConfiguration(string $adapterName, string $adapterCfgClass): FilesystemAdapterConfigurationInterface;

    /**
     * @param string $adapterName
     *
     * @return string
     */
    public function getAdapterType(string $adapterName): string;

    /**
     * @param string $adapterName
     *
     * @return FilesystemAdapterConfigurationInterface
     */
    public function getAdapterConfiguration(string $adapterName): FilesystemAdapterConfigurationInterface;
}