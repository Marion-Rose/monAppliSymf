<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX0XS2yr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX0XS2yr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX0XS2yr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX0XS2yr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX0XS2yr\App_KernelDevDebugContainer([
    'container.build_hash' => 'X0XS2yr',
    'container.build_id' => 'd65cc2ce',
    'container.build_time' => 1712915288,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX0XS2yr');
