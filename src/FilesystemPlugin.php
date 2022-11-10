<?php

namespace Micro\Plugin\Filesystem;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Plugin\AbstractPlugin;
use Micro\Plugin\Filesystem\Configuration\FilesystemPluginConfigurationInterface;
use Micro\Plugin\Filesystem\Facade\FilesystemFacade;
use Micro\Plugin\Filesystem\Facade\FilesystemFacadeInterface;

/**
 * @method FilesystemPluginConfigurationInterface configuration()
 */
class FilesystemPlugin extends AbstractPlugin
{
    /**
     * {@inheritDoc}
     */
    public function provideDependencies(Container $container): void
    {
        $container->register(FilesystemFacadeInterface::class, fn() => $this->createFacade());
    }

    /**
     * @return FilesystemFacadeInterface
     */
    protected function createFacade(): FilesystemFacadeInterface
    {
        return new FilesystemFacade();
    }
}

