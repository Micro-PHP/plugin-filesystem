<?php

namespace Micro\Plugin\Filesystem\Configuration\Adapter;

use Micro\Framework\Kernel\Configuration\PluginRoutingKeyConfiguration;

class AbstractFilesystemAdapterConfiguration extends PluginRoutingKeyConfiguration implements FilesystemAdapterConfigurationInterface
{
    const CFG_ADAPTER_TYPE = 'MICRO_FS_%s_PUBLIC_URL';

    /**
     * {@inheritDoc}
     */
    public function getPublicUrl(): null|string
    {
        return (string) $this->get(self::CFG_ADAPTER_TYPE);
    }
}