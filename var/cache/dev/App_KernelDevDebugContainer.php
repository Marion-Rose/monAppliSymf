<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRe5MefG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRe5MefG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRe5MefG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRe5MefG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRe5MefG\App_KernelDevDebugContainer([
    'container.build_hash' => 'Re5MefG',
    'container.build_id' => '76c0b4cd',
    'container.build_time' => 1713713004,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRe5MefG');
