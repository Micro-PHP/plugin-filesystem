<?php

namespace Micro\Plugin\Filesystem;

use Micro\Framework\Kernel\Configuration\Exception\InvalidConfigurationException;
use Micro\Framework\Kernel\Configuration\PluginConfiguration;
use Micro\Plugin\Filesystem\Configuration\Adapter\FilesystemAdapterConfigurationInterface;
use Micro\Plugin\Filesystem\Configuration\FilesystemPluginConfigurationInterface;

class FilesystemPluginConfiguration extends PluginConfiguration implements FilesystemPluginConfigurationInterface
{
    const CFG_ADAPTER_TYPE = 'MICRO_FS_%s_TYPE';

    /**
     * {@inheritDoc}
     */
    public function createAdapterConfiguration(string $adapterName, string $adapterCfgClass): FilesystemAdapterConfigurationInterface
    {
       if(!class_exists($adapterCfgClass)) {
           throw new InvalidConfigurationException(
               sprintf('Adapter "%s" can not be configured. Configuration class "%s" not exists.',
                   $adapterName,
                   $adapterCfgClass
               )
           );
       }

       return new $adapterCfgClass($this->configuration, $adapterName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdapterType(string $adapterName): string
    {
        return mb_strtolower(
            $this->configuration->get(
                sprintf(self::CFG_ADAPTER_TYPE, mb_strtoupper($adapterName)),
                null,
                false
            )
        );
    }

    /**
     * @param string $adapterName
     * @return FilesystemAdapterConfigurationInterface
     *
     * @throws \Exception
     */
    public function getAdapterConfiguration(string $adapterName): FilesystemAdapterConfigurationInterface
    {
        throw new \Exception(sprintf('No configuration available for filesystem adapter "%s"', $adapterName));
    }
}