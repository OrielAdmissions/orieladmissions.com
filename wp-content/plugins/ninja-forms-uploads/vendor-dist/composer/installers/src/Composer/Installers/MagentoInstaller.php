<?php

namespace NF_FU_VENDOR\Composer\Installers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array('theme' => 'app/design/frontend/{$name}/', 'skin' => 'skin/frontend/default/{$name}/', 'library' => 'lib/{$name}/');
}
