# Micro Framework: Filesystem plugin

Filesystem abstration layer

## Installation

First, identify and install the file system adapters you need. (multiple possible).

```bash
$ composer require micro/plugin-filesystem-{ADAPTER_TYPE}
```
#### Available adapters:
[micro/plugin-filesystem-s3]()

[micro/plugin-filesystem-local]()

And then add plugin to the list of plugins (etc/plugins.php)

```php

$pluginsCommon = [
    //....OTHER PLUGINS ....
    Micro\Plugin\Filesystem\FilesystemPlugin::class,
    Micro\Plugin\Filesystem\Adapter\Aws\FilesystemS3AdapterPlugin::class,
    Micro\Plugin\Filesystem\Adapter\Local\FilesystemLocalAdapterPlugin::class,
];

```

## Configure

The adapter configuration template usually looks like this `MICRO_FS_<ADAPTER_NAME>_<ADAPTER_SETTING>`

Default file system with adapter name "default"

#### Example configuration :
```dotenv
MICRO_FS_DEFAULT_TYPE=aws_s3
MICRO_FS_DEFAULT_REGION=us-east-1
MICRO_FS_DEFAULT_BUCKET=my_bucket
MICRO_FS_DEFAULT_SCHEME=http
MICRO_FS_DEFAULT_VERSION=latest
MICRO_FS_DEFAULT_ENDPOINT=http://filestorage:9000
MICRO_FS_DEFAULT_KEY_ACCESS=${AWS_S3_KEY_ACCESS}
MICRO_FS_DEFAULT_KEY_SECRET=${AWS_S3_KEY_SECRET}
MICRO_FS_DEFAULT_PUBLIC_URL=http://filestorage:9000/${MICRO_FS_DEFAULT_BUCKET}
```







