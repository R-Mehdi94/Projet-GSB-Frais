<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAxwknSX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAxwknSX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAxwknSX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAxwknSX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAxwknSX\App_KernelDevDebugContainer([
    'container.build_hash' => 'AxwknSX',
    'container.build_id' => '28f3224c',
    'container.build_time' => 1669050497,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAxwknSX');
