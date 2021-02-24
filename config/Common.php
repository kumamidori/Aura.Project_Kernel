<?php
namespace Aura\Project_Kernel\_Config;

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

class Common extends ContainerConfig
{
    public function define(Container $di): void
    {
        $di->set('aura/project-kernel:logger', $di->lazyNew('Psr\Log\NullLogger'));
    }
}
