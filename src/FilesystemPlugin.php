<?php

namespace Micro\Plugin\Filesystem;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Plugin\ConfigurableInterface;
use Micro\Framework\Kernel\Plugin\DependencyProviderInterface;
use Micro\Framework\Kernel\Plugin\PluginConfigurationTrait;
use Micro\Plugin\Filesystem\Configuration\FilesystemPluginConfigurationInterface;
use Micro\Plugin\Filesystem\Facade\FilesystemFacade;
use Micro\Plugin\Filesystem\Facade\FilesystemFacadeInterface;

/**
 * @method FilesystemPluginConfigurationInterface configuration()
 */
class FilesystemPlugin implements DependencyProviderInterface, ConfigurableInterface
{
    use PluginConfigurationTrait;

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

