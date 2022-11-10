<?php

namespace Micro\Plugin\Filesystem\Business\FS;

use League\Flysystem\FilesystemOperator;

interface FsFactoryInterface
{
    /**
     * @param string $adapterName
     *
     * @return FilesystemOperator
     */
    public function create(string $adapterName): FilesystemOperator;
}